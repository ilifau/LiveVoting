<?php

include_once("Services/Init/classes/class.ilInitialisation.php");

/**
 * Class srInitialisation
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class srInitialisation extends ilInitialisation {

	const USE_OWN_GLOBAL_TPL = false;
	/**
	 * @var string
	 */
	protected static $context;


	/**
	 * @param ilContext
	 */
	public static function setContext($context) {
		srContext::init($context);
		self::$context = $context;
	}


	/**
	 * set session handler to db
	 *
	 * Used in Soap/CAS
	 */
	public static function setSessionHandler() {
		require_once('./Customizing/global/plugins/Services/Repository/RepositoryObject/LiveVoting/classes/class.xlvoSessionHandler.php');
		session_set_save_handler(new xlvoSessionHandler());
		//		echo "!!!";
		//		exit;
	}


	/**
	 * ilias initialisation
	 */
	public static function initILIAS() {
		if (self::$already_initialized) {
			return;
		}

		self::$already_initialized = true;
		self::initCore();
		self::initClient();
		self::initUser();
		self::initLanguage();
		self::initHTML();
	}


	/**
	 * init HTML output (level 3)
	 */
	protected static function initHTML() {
		parent::initHTML();
		if (self::USE_OWN_GLOBAL_TPL) {
			$tpl = new ilTemplate("tpl.main.html", true, true, 'Customizing/global/plugins/Services/Repository/RepositoryObject/LiveVoting');
			$tpl->addCss('./templates/default/delos.css');
			$tpl->addBlockFile("CONTENT", "content", "tpl.main_voter.html", 'Customizing/global/plugins/Services/Repository/RepositoryObject/LiveVoting');

			self::initGlobal("tpl", $tpl);
		}
		global $tpl;
		if (! self::USE_OWN_GLOBAL_TPL) {
			$tpl->getStandardTemplate();
		}
		$tpl->setVariable('BASE', '/'); // FSX TODO set to real root
		if (self::USE_OWN_GLOBAL_TPL) {
			include_once("./Services/jQuery/classes/class.iljQueryUtil.php");
			iljQueryUtil::initjQuery();
			include_once("./Services/UICore/classes/class.ilUIFramework.php");
			ilUIFramework::init();
		}
	}


	protected static function initClient() {
		global $https;

		self::determineClient();
		self::initClientIniFile();
		self::initDatabase();
		if (! is_object($GLOBALS["ilPluginAdmin"])) {
			self::initGlobal("ilPluginAdmin", "ilPluginAdmin", "./Services/Component/classes/class.ilPluginAdmin.php");
		}
		self::setSessionHandler();
		self::initSettings();
		self::initLocale();

		if (ilContext::usesHTTP()) {
			self::initGlobal("https", "ilHTTPS", "./Services/Http/classes/class.ilHTTPS.php");
			$https->enableSecureCookies();
			$https->checkPort();
		}

		self::initGlobal("ilObjDataCache", "ilObjectDataCache", "./Services/Object/classes/class.ilObjectDataCache.php");
		require_once "./Services/Tree/classes/class.ilTree.php";
		$tree = new ilTree(ROOT_FOLDER_ID);
		self::initGlobal("tree", $tree);
		unset($tree);
		self::initGlobal("ilCtrl", "ilCtrl", "./Services/UICore/classes/class.ilCtrl.php");
		self::setCookieParams();
	}
}
