<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use LiveVoting\Context\Param\ParamManager;
use LiveVoting\Exceptions\xlvoPlayerException;
use LiveVoting\Exceptions\xlvoVotingManagerException;
use LiveVoting\GUI\xlvoGUI;
use LiveVoting\GUI\xlvoLinkButton;
use LiveVoting\GUI\xlvoToolbarGUI;
use LiveVoting\Js\xlvoJs;
use LiveVoting\Js\xlvoJsResponse;
use LiveVoting\Pin\xlvoPin;
use LiveVoting\Player\QR\xlvoQR;
use LiveVoting\Player\QR\xlvoQRModalGUI;
use LiveVoting\Player\xlvoDisplayPlayerGUI;
use LiveVoting\Player\xlvoPlayer;
use LiveVoting\QuestionTypes\xlvoQuestionTypesGUI;
use LiveVoting\Voter\xlvoVoter;
use LiveVoting\Voting\xlvoVoting;
use LiveVoting\Voting\xlvoVotingConfig;
use LiveVoting\Voting\xlvoVotingManager2;
use srag\CustomInputGUIs\LiveVoting\GlyphGUI\GlyphGUI;

/**
 * Class xlvoPlayerGUI
 *
 * @author            Fabian Schmid <fs@studer-raimann.ch>
 *
 * @ilCtrl_isCalledBy xlvoPlayerGUI: ilUIPluginRouterGUI
 */
class xlvoPlayerGUI extends xlvoGUI {

	const IDENTIFIER = 'xvi';
	const CMD_START_PLAYER = 'startPlayer';
	const CMD_START_PLAYER_AND_UNFREEZE = 'startPlayerAnUnfreeze';
	const CMD_START_PRESENTER = 'startPresenter';
	const CMD_SHOW_PPT_QUESTION_OVERVIEW = 'showPptQuestionOverview';
	const CMD_NEXT = 'next';
	const CMD_PREVIOUS = 'previous';
	const CMD_FREEZE = 'freeze';
	const CMD_UNFREEZE = 'unfreeze';
	const CMD_RESET = 'reset';
	const CMD_TERMINATE = 'terminate';
	const CMD_END = 'end';
	const CMD_GET_PLAYER_DATA = 'getPlayerData';
	const CMD_API_CALL = 'apiCall';
	const DEBUG = false;
	/**
	 * @var xlvoVotingManager2
	 */
	protected $manager;


	/**
	 *
	 */
	public function __construct() {
		parent::__construct();
		$param_manager = ParamManager::getInstance();

		$this->manager = xlvoVotingManager2::getInstanceFromObjId(ilObject2::_lookupObjId($param_manager->getRefId()));

		self::dic()->mainTemplate()->addCss(self::plugin()->directory() . '/templates/default/default.css');
	}


	/**
	 * @param string $key
	 *
	 * @return string
	 */
	protected function txt($key) {
		return self::plugin()->translate($key, 'player');
	}


	/**
	 *
	 */
	protected function index() {
		try {
			$this->manager->prepareStart();
		} catch (xlvoPlayerException $e) {
			ilUtil::sendFailure($this->txt('msg_no_start_' . $e->getCode()), true);

			return;
		}

		$b = ilLinkButton::getInstance();
		$b->setCaption($this->txt('start_voting'), false);
		$b->addCSSClass('xlvo-preview');
		$b->setUrl(self::dic()->ctrl()->getLinkTarget(new xlvoPlayerGUI(), self::CMD_START_PLAYER));
		$b->setId('btn-start-voting');
		$b->setPrimary(true);
		self::dic()->toolbar()->addButtonInstance($b);

		$b = ilLinkButton::getInstance();
		$b->setCaption($this->txt('start_voting_and_unfreeze'), false);
		$b->addCSSClass('xlvo-preview');
		$b->setUrl(self::dic()->ctrl()->getLinkTarget(new xlvoPlayerGUI(), self::CMD_START_PLAYER_AND_UNFREEZE));
		$b->setId('btn-start-voting-unfreeze');
		self::dic()->toolbar()->addButtonInstance($b);

		$current_selection_list = $this->getVotingSelectionList(false);
		self::dic()->toolbar()->addText($current_selection_list->getHTML());

		$template = self::plugin()->template('default/Player/tpl.start.html');
		/**
		 * @var xlvoVotingConfig $xlvoVotingConfig
		 */
		$xlvoVotingConfig = $this->manager->getVotingConfig();

		$template->setVariable('PIN', xlvoPin::formatPin($xlvoVotingConfig->getPin()));

		$param_manager = ParamManager::getInstance();
		$template->setVariable('QR-CODE', xlvoQR::getImageDataString($xlvoVotingConfig->getShortLinkURL(true, $param_manager->getRefId()), 180));

		$template->setVariable('SHORTLINK', $xlvoVotingConfig->getShortLinkURL(false, $param_manager->getRefId()));
		$template->setVariable('MODAL', xlvoQRModalGUI::getInstanceFromVotingConfig($xlvoVotingConfig)->getHTML());
		$template->setVariable("ONLINE_TEXT", self::plugin()->translate("start_online", "", [ 0 ]));
		$template->setVariable("ZOOM_TEXT", self::plugin()->translate("start_zoom"));

		$js = xlvoJs::getInstance()->ilias($this)->name('Player')->init();
		if ($this->manager->getVotingConfig()->isShowAttendees()) {
			$js->call('updateAttendees');
			$template->touchBlock('attendees');
		}
		$js->call('handleStartButton');

		self::dic()->mainTemplate()->setContent($template->get());
	}


	/**
	 *
	 */
	protected function getAttendees() {
		xlvoJsResponse::getInstance(self::plugin()->translate("start_online", "", [ xlvoVoter::countVoters($this->manager->getPlayer()->getId()) ]))
			->send();
	}


	/**
	 *
	 */
	protected function startPlayerAnUnfreeze() {
		$this->initJSandCss();
		$this->initToolbarDuringVoting();
		$this->manager->prepare();
		$this->manager->getPlayer()->setStatus(xlvoPlayer::STAT_RUNNING);
		$this->manager->getPlayer()->unfreeze(trim(filter_input(INPUT_GET, ParamManager::PARAM_VOTING), "/"));
		$modal = xlvoQRModalGUI::getInstanceFromVotingConfig($this->manager->getVotingConfig())->getHTML();
		self::dic()->mainTemplate()->setContent($modal . $this->getPlayerHTML());
		$this->handlePreview();
	}


	/**
	 *
	 */
	protected function startPlayer() {
		$this->initJSandCss();
		$this->manager->prepare();

		if ($voting_id = trim(filter_input(INPUT_GET, ParamManager::PARAM_VOTING), "/")) {
			$this->manager->getPlayer()->setActiveVoting($voting_id);
			$this->manager->getPlayer()->store();
		}

		$this->initToolbarDuringVoting();
		$modal = xlvoQRModalGUI::getInstanceFromVotingConfig($this->manager->getVotingConfig())->getHTML();
		self::dic()->mainTemplate()->setContent($modal . $this->getPlayerHTML());
		$this->handlePreview();
	}


	/**
	 * @throws ilException
	 */
	protected function startPresenter() {
		try {
			xlvoPin::checkPinAndGetObjId($this->param_manager->getPin());
		} catch (Throwable $e) {
			throw new ilException("PlayerGUI startPresenter: Wrong PIN! (1)");
		}

		if ($this->param_manager->getVoting() == 0) {
			throw new ilException("PlayerGUI startPresenter: No Voting!");
		}

		$this->manager = new xlvoVotingManager2($this->param_manager->getPin(), $this->param_manager->getVoting());

		/**
		 * @var xlvoVotingConfig|null $xlvoVotingConfig
		 */
		$xlvoVotingConfig = xlvoVotingConfig::find($this->manager->getObjId());

		if ($xlvoVotingConfig === NULL) {
			/* || !ilObjLiveVotingAccess::hasWriteAccess($this->manager->getObjId())*/
			throw new ilException("PlayerGUI startPresenter: Wrong PIN! (2)");
		}

		if ($xlvoVotingConfig->getPuk() !== $this->param_manager->getPuk()) {
			throw new ilException("Wrong PUK!");
		}

		self::dic()->ctrl()->saveParameter($this, "ref_id");

		if ($this->param_manager->getVoting()) {
			$this->manager->open($this->param_manager->getVoting());
		}

		$this->startPlayer();
	}


	/**
	 *
	 */
	protected function getPlayerData() {

		$this->manager->attend();

		//Set Active Voting of Presenter via URL - bot don't save it - PLLV-272
		if ($this->param_manager->getVoting() > 0) {
			$this->manager->getPlayer()->setActiveVoting($this->param_manager->getVoting());
		}

		$results = array(
			'player' => $this->manager->getPlayer()->getStdClassForPlayer(),
			'player_html' => $this->getPlayerHTML(true),
			'buttons_html' => $this->getButtonsHTML(),
		);
		xlvoJsResponse::getInstance($results)->send();
	}


	/**
	 * @param bool $inner
	 *
	 * @return string
	 */
	protected function getPlayerHTML($inner = false) {
		$xlvoDisplayPlayerGUI = new xlvoDisplayPlayerGUI($this->manager);

		return $xlvoDisplayPlayerGUI->getHTML($inner);
	}


	/**
	 * @return string
	 */
	protected function getButtonsHTML() {
		// Buttons from Questions
		$xlvoQuestionTypesGUI = xlvoQuestionTypesGUI::getInstance($this->manager);
		if ($xlvoQuestionTypesGUI->hasButtons()) {
			$toolbar = new xlvoToolbarGUI();

			foreach ($xlvoQuestionTypesGUI->getButtonInstances() as $buttonInstance) {
				if ($buttonInstance instanceof ilButton || $buttonInstance instanceof ilButtonBase) {
					$toolbar->addButtonInstance($buttonInstance);
				}
			}

			return $toolbar->getHTML();
		}

		return '';
	}


	/**
	 *
	 */
	protected function next() {
		$this->manager->next();
		self::dic()->ctrl()->redirect($this, self::CMD_START_PLAYER);
	}


	/**
	 *
	 */
	protected function previous() {
		$this->manager->previous();
		self::dic()->ctrl()->redirect($this, self::CMD_START_PLAYER);
	}


	/**
	 *
	 */
	protected function terminate() {
		$this->manager->terminate();
		self::dic()->ctrl()->redirect($this, self::CMD_STANDARD);
	}


	/**
	 * @throws ilException
	 */
	protected function apiCall() {

		/*if ($_POST['xvi'] > 0) {
			$this->manager->getPlayer()->setActiveVoting($_POST['xvi']);
		}*/

		$return_value = true;
		switch ($_POST['call']) {
			case 'toggle_freeze':
				//$this->manager->getPlayer()->setStatus(xlvoPlayer::STAT_RUNNING);
				$this->manager->getPlayer()->toggleFreeze(trim(filter_input(INPUT_GET, ParamManager::PARAM_VOTING), "/"));
				break;
			case 'toggle_results':
				$this->manager->getPlayer()->toggleResults();
				break;
			case 'reset':
				$this->manager->reset();
				break;
			case 'next':
				$this->manager->next();
				break;
			case 'previous':
				$this->manager->previous();
				break;
			case 'open':
				$this->manager->open($_POST[self::IDENTIFIER]);
				break;
			case 'countdown':
				$this->manager->countdown($_POST['seconds']);
				break;
			case 'button':
				/**
				 * QuestionGUIs can add own button which have to call the player with 'call=button&button_id={cmd}&data=[some,data]
				 */
				$xlvoQuestionTypesGUI = xlvoQuestionTypesGUI::getInstance($this->manager);
				$xlvoQuestionTypesGUI->handleButtonCall($_POST['button_id'], $_POST['button_data']);
				$return_value = new stdClass();
				$return_value->buttons_html = $this->getButtonsHTML();
				break;
		}

		xlvoJsResponse::getInstance($return_value)->send();
	}


	/**
	 * Set Toolbar Content and Buttons for the Player.
	 */
	protected function initToolbarDuringVoting() {
		// Freeze
		$suspendButton = xlvoLinkButton::getInstance();
		$suspendButton->clearClasses();
		$suspendButton->addCSSClass('btn-warning');
		$suspendButton->setCaption(GlyphGUI::get('pause') . $this->txt('freeze'), false);
		$suspendButton->setUrl('#');
		$suspendButton->setId('btn-freeze');
		$this->addStickyButtonToToolbar($suspendButton);

		// Unfreeze
		$playButton = xlvoLinkButton::getInstance();
		$playButton->clearClasses();
		$playButton->setPrimary(true);
		$playButton->setCaption(GlyphGUI::get('play') . $this->txt('unfreeze'), false);
		$playButton->setUrl('#');
		$playButton->setId('btn-unfreeze');

		$split = ilSplitButtonGUI::getInstance();
		$split->setDefaultButton($playButton);
		foreach (array( 10, 30, 90, 120, 180, 240, 300 ) as $seconds) {
			$cd = ilLinkButton::getInstance();
			$cd->setUrl('#');
			$cd->setCaption($seconds . ' ' . self::plugin()->translate('player_seconds'), false);
			$cd->setOnClick("xlvoPlayer.countdown(event, $seconds);");
			$ilSplitButtonMenuItem = new ilButtonToSplitButtonMenuItemAdapter($cd);
			$split->addMenuItem($ilSplitButtonMenuItem);
		}

		$this->addStickyButtonToToolbar($split);

		// Hide
		$suspendButton = ilLinkButton::getInstance();
		$suspendButton->setCaption($this->txt('hide_results'), false);
		$suspendButton->setUrl('#');
		$suspendButton->setId('btn-hide-results');
		self::dic()->toolbar()->addButtonInstance($suspendButton);

		// Show
		$suspendButton = ilLinkButton::getInstance();
		$suspendButton->setCaption($this->txt('show_results'), false);
		$suspendButton->setUrl('#');
		$suspendButton->setId('btn-show-results');
		self::dic()->toolbar()->addButtonInstance($suspendButton);

		// Reset
		$suspendButton = ilLinkButton::getInstance();
		$suspendButton->setCaption(GlyphGUI::get('remove') . $this->txt('reset'), false);
		$suspendButton->setUrl('#');
		$suspendButton->setId('btn-reset');
		self::dic()->toolbar()->addButtonInstance($suspendButton);

		//
		//
		self::dic()->toolbar()->addSeparator();
		//
		//

		if (!$this->param_manager->isPpt()) {
			// PREV
			$suspendButton = ilLinkButton::getInstance();
			$suspendButton->setDisabled(true);
			$suspendButton->setUrl(self::dic()->ctrl()->getLinkTarget($this, self::CMD_PREVIOUS));
			$suspendButton->setCaption(GlyphGUI::get(GlyphGUI::PREVIOUS), false);
			$suspendButton->setId('btn-previous');
			self::dic()->toolbar()->addButtonInstance($suspendButton);

			// NEXT
			$suspendButton = ilLinkButton::getInstance();
			$suspendButton->setDisabled(true);
			$suspendButton->setCaption(GlyphGUI::get(GlyphGUI::NEXT), false);
			$suspendButton->setUrl(self::dic()->ctrl()->getLinkTarget($this, self::CMD_NEXT));
			$suspendButton->setId('btn-next');
			self::dic()->toolbar()->addButtonInstance($suspendButton);
		}

		// Votings
		if (!$this->param_manager->isPpt()) {
			$current_selection_list = $this->getVotingSelectionList();
			self::dic()->toolbar()->addText($current_selection_list->getHTML());
		}

		//
		//
		self::dic()->toolbar()->addSeparator();
		//
		//

		// Fullscreen
		if ($this->manager->getVotingConfig()->isFullScreen() && !$this->param_manager->isPpt()) {
			$suspendButton = ilLinkButton::getInstance();
			$suspendButton->setCaption(GlyphGUI::get('fullscreen'), false);
			$suspendButton->setUrl('#');
			$suspendButton->setId('btn-start-fullscreen');
			self::dic()->toolbar()->addButtonInstance($suspendButton);

			$suspendButton = ilLinkButton::getInstance();
			$suspendButton->setCaption(GlyphGUI::get('resize-small'), false);
			$suspendButton->setUrl('#');
			$suspendButton->setId('btn-close-fullscreen');
			self::dic()->toolbar()->addButtonInstance($suspendButton);
		}

		// END
		$suspendButton = ilLinkButton::getInstance();
		$suspendButton->setCaption(GlyphGUI::get('stop') . $this->txt('terminate'), false);
		$suspendButton->setUrl(self::dic()->ctrl()->getLinkTarget(new xlvoPlayerGUI(), self::CMD_TERMINATE));
		$suspendButton->setId('btn-terminate');
		self::dic()->toolbar()->addButtonInstance($suspendButton);
		if (self::DEBUG) {

			// PAUSE PULL
			$suspendButton = ilLinkButton::getInstance();
			$suspendButton->setCaption('Toogle Pulling', false);
			$suspendButton->setUrl('#');
			$suspendButton->setId('btn-toggle-pull');
			self::dic()->toolbar()->addButtonInstance($suspendButton);
		}
	}


	/**
	 * Adds a button to the toolbar and make it stick to it,
	 * which means that the button is also visible if the mobile size of the website is used.
	 *
	 * @param ilButtonBase $button Button which should be added sticky to the toolbar.
	 *
	 * @return void
	 */
	private function addStickyButtonToToolbar(ilButtonBase $button) {
		self::dic()->toolbar()->addStickyItem($button);
	}


	/**
	 * @param bool $async
	 *
	 * @return ilAdvancedSelectionListGUI
	 */
	protected function getVotingSelectionList($async = true) {
		$current_selection_list = new ilAdvancedSelectionListGUI();
		$current_selection_list->setItemLinkClass('xlvo-preview');
		$current_selection_list->setListTitle($this->txt('voting_list'));
		$current_selection_list->setId('xlvo_select');
		$current_selection_list->setTriggerEvent('xlvo_voting');
		$current_selection_list->setUseImages(false);
		/**
		 * @var xlvoVoting[] $votings
		 */
		foreach ($this->manager->getAllVotings() as $voting) {
			$id = $voting->getId();
			$t = $voting->getTitle();
			self::dic()->ctrl()->setParameterByClass(xlvoPlayerGUI::class, ParamManager::PARAM_VOTING, $id);

			$target = self::dic()->ctrl()->getLinkTarget(new xlvoPlayerGUI(), self::CMD_START_PLAYER);
			if ($async) {
				$current_selection_list->addItem($t, $id, $target, '', '', '', '', false, 'xlvoPlayer.open(' . $id . ')');
			} else {
				$current_selection_list->addItem($t, $id, $target);
			}
		}

		return $current_selection_list;
	}


	/**
	 * @throws ilException
	 * @throws xlvoVotingManagerException
	 */
	protected function initJSandCss() {
		switch (true) {
			case self::version()->is53():
			case self::version()->is52():
				ilMathJax::getInstance()->includeMathJax();
				break;
			default:
				throw new ilException('Can not initialise js and css for the installed ILIAS version.');
				break;
		}

		$mathJaxSetting = new ilSetting("MathJax");
		$settings = array(
			'status_running' => xlvoPlayer::STAT_RUNNING,
			'identifier' => self::IDENTIFIER,
			'use_mathjax' => (bool)$mathJaxSetting->get("enable"),
			'debug' => self::DEBUG
		);
		$keyboard = new stdClass();
		$keyboard->active = $this->manager->getVotingConfig()->isKeyboardActive();
		if ($keyboard->active) {
			$keyboard->toggle_results = 9;
			$keyboard->toggle_freeze = 32;
			$keyboard->previous = 37;
			$keyboard->next = 39;
		}
		$settings['keyboard'] = $keyboard;

		$settings['xlvo_ppt'] = $this->param_manager->isPpt();

		iljQueryUtil::initjQuery();

		//self::dic()->mainTemplate()->addJavaScript("https://appsforoffice.microsoft.com/lib/1/hosted/Office.js");
		//self::dic()->mainTemplate()->addJavaScript(self::plugin()->directory() . '/js/PPT/xlvoPPT.min.js');

		xlvoJs::getInstance()->addLibToHeader('screenfull.min.js');
		xlvoJs::getInstance()->ilias($this)->addSettings($settings)->name('Player')->addTranslations(array(
			'voting_confirm_reset',
		))->init()->setRunCode();

		//xlvoJs::getInstance()->ilias($this)->name('PPT')->init()->setRunCode();

		self::dic()->mainTemplate()->addCss(self::plugin()->directory() . '/templates/default/Player/player.css');
		self::dic()->mainTemplate()->addCss(self::plugin()->directory() . '/LiveVoting/templates/default/Display/Bar/bar.css');
	}


	/**
	 * @throws xlvoVotingManagerException
	 */
	protected function handlePreview() {
		if ($this->manager->getVotingConfig()->isSelfVote()) {
			$preview = self::plugin()->template('default/Player/tpl.preview.html', true, false);

			$param_manager = ParamManager::getInstance();

			$preview->setVariable('URL', $this->manager->getVotingConfig()->getShortLinkURL(false, $param_manager->getRefId()));
			self::dic()->mainTemplate()->setRightContent($preview->get());
		}
	}
}
