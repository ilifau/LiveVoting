<?php

namespace LiveVoting\Voting;

use ilObject2;
use ilLink;
use ilObjectActivation;
use ilLiveVotingPlugin;
use LiveVoting\Cache\CachingActiveRecord;
use LiveVoting\Conf\xlvoConf;
use LiveVoting\Context\Param\ParamManager;
use LiveVoting\Pin\xlvoPin;
use LiveVoting\Puk\Puk;

/**
 * Class xlvoVotingConfig
 *
 * @package LiveVoting\Voting
 * @author  Daniel Aemmer <daniel.aemmer@phbern.ch>
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 * @version 1.0.0
 */
class xlvoVotingConfig extends CachingActiveRecord {

	const B_FROZEN_ALWAY_OFF = 0;
	const B_FROZEN_ALWAY_ON = 1;
	const B_FROZEN_REUSE = 2;
	const B_RESULTS_ALWAY_OFF = 0;
	const B_RESULTS_ALWAY_ON = 1;
	const B_RESULTS_REUSE = 2;
	const F_ANONYMOUS = 'anonymous';
	const F_FROZEN_BEHAVIOUR = 'frozen_behaviour';
	const F_RESULTS_BEHAVIOUR = 'results_behaviour';
	const F_ONLINE = 'online';
	const F_REUSE_STATUS = 'reuse_status';
	const F_TERMINABLE = 'terminable';
	const F_TERMINABLE_SELECT = "terminable_select";
	const F_VOTING_HISTORY = "voting_history";
	const F_SHOW_ATTENDEES = "show_attendees";
	const TABLE_NAME = 'rep_robj_xlvo_config_n';


	/**
	 * @return string
	 */
	public function getConnectorContainerName() {
		return self::TABLE_NAME;
	}


	/**
	 * @return string
	 * @deprecated
	 */
	public static function returnDbTableName() {
		return self::TABLE_NAME;
	}


	/**
	 * @var int
	 *
	 * @db_is_primary       true
	 * @db_has_field        true
	 * @db_fieldtype        integer
	 * @db_length           8
	 */
	protected $obj_id;
	/**
	 * @var string
	 *
	 * @db_has_field        true
	 * @db_fieldtype        text
	 * @db_length           256
	 */
	protected $pin = '';
	/**
	 * @var bool
	 *
	 * @db_has_field        true
	 * @db_fieldtype        integer
	 * @db_length           1
	 */
	protected $obj_online = true;
	/**
	 * @var bool
	 *
	 * @db_has_field        true
	 * @db_fieldtype        integer
	 * @db_length           1
	 */
	protected $anonymous = true;
	/**
	 * @var bool
	 *
	 * @db_has_field        true
	 * @db_fieldtype        integer
	 * @db_length           1
	 */
	protected $terminable = false;
	/**
	 * @var string
	 *
	 * @db_has_field        true
	 * @db_fieldtype        timestamp
	 */
	protected $start_date;
	/**
	 * @var string
	 *
	 * @db_has_field        true
	 * @db_fieldtype        timestamp
	 */
	protected $end_date;
	/**
	 * @var bool
	 *
	 * @db_has_field        true
	 * @db_fieldtype        integer
	 * @db_length           1
	 */
	protected $reuse_status = true;
	/**
	 * @var string
	 *
	 * @db_has_field        true
	 * @db_fieldtype        timestamp
	 */
	protected $last_access = '';
	/**
	 * @var int
	 *
	 * @db_has_field        true
	 * @db_fieldtype        integer
	 * @db_length           1
	 */
	protected $frozen_behaviour = self::B_FROZEN_ALWAY_OFF;
	/**
	 * @var int
	 *
	 * @db_has_field        true
	 * @db_fieldtype        integer
	 * @db_length           1
	 */
	protected $results_behaviour = self::B_RESULTS_ALWAY_OFF;
	/**
	 * @var int
	 *
	 * @db_has_field        true
	 * @db_fieldtype        integer
	 * @db_length           1
	 */
	protected $voting_history = false;
	/**
	 * @var bool
	 */
	protected $full_screen = true;
	/**
	 * @var bool
	 *
	 * @db_has_field        true
	 * @db_fieldtype        integer
	 * @db_length           1
	 */
	protected $show_attendees = false;
	/**
	 * @var bool
	 */
	protected $self_vote = false;
	/**
	 * @var bool
	 */
	protected $keyboard_active = false;
	/**
	 * @var string
	 *
	 * @db_has_field        true
	 * @db_fieldtype        text
	 * @db_length           256
	 */
	protected $puk = '';


	/**
	 * @return bool
	 */
	public function isAvailableForUser() {
		if (!$this->getObjId()) {
			return false;
		}
		$available = true;
		$ref_ids = ilObject2::_getAllReferences($this->getObjId());
		foreach ($ref_ids as $ref_id) {
			$item_data = ilObjectActivation::getItem($ref_id);
			if ($item_data['timing_type'] == ilObjectActivation::TIMINGS_ACTIVATION) {
				if ($item_data['timing_start'] > time() || $item_data['timing_end'] < time()) {
					$available = false;
				}
			}
		}

		return $available;
	}


	/**
	 * @param bool $force_not_format
	 * @param int ref_id
	 *
	 * @return string
	 */
	public function getShortLinkURL($force_not_format = false, $ref_id = 0) {
		global $DIC;

		$url = NULL;

		switch ($this->isAnonymous()) {
			case true:
				$shortLinkEnabled = boolval(xlvoConf::getConfig(xlvoConf::F_ALLOW_SHORTLINK_VOTE));

				if ($shortLinkEnabled) {
					$url = xlvoConf::getConfig(xlvoConf::F_ALLOW_SHORTLINK_VOTE_LINK);
					$url = rtrim($url, "/") . "/";
				} else {
					$url = ILIAS_HTTP_PATH . substr(self::plugin()->directory(), 1) . '/pin.php?' . ParamManager::PARAM_PIN . '=';
				}
				$url .= xlvoPin::formatPin($this->getPin(), $force_not_format);
				break;
			default:
				$url = ilLink::_getStaticLink($ref_id, ilLiveVotingPlugin::PLUGIN_ID, true);
				break;
		}

		return $url;
	}


	/**
	 * @param int|null $voting_id
	 * @param bool     $power_point
	 * @param bool     $force_not_format
	 * @param bool     $https
	 *
	 * @return string
	 */
	public function getPresenterLink($voting_id = NULL, $power_point = false, $force_not_format = false, $https = true) {
		$url = NULL;

		if(!$this->isAnonymous()) {
			return null;
		}

		$shortLinkEnabled = boolval(xlvoConf::getConfig(xlvoConf::F_ALLOW_SHORTLINK_PRESENTER));

		if ($shortLinkEnabled) {
			$url = xlvoConf::getConfig(xlvoConf::F_ALLOW_SHORTLINK_PRESENTER_LINK);
			$url = rtrim($url, "/") . "/";
			$url .= xlvoPin::formatPin($this->getPin(), $force_not_format) . "/" . Puk::formatPin($this->getPuk(), $force_not_format);
			if ($voting_id !== NULL) {
				$url .= "/" . $voting_id;
			}
			if ($power_point) {
				$url .= "/1";
			}
		} else {
			$url = ILIAS_HTTP_PATH . substr(self::plugin()->directory(), 1) . '/presenter.php?' . ParamManager::PARAM_PIN . '='
				. xlvoPin::formatPin($this->getPin(), $force_not_format) . "&" . ParamManager::PARAM_PUK . "="
				. Puk::formatPin($this->getPuk(), $force_not_format);
			if ($voting_id !== NULL) {
				$url .= "&" . ParamManager::PARAM_VOTING . "=" . $voting_id;
			}
			if ($power_point) {
				$url .= "&" . ParamManager::PARAM_PPT . "=1";
			}
		}

		if (!$https) {
			$url = substr($url, (stripos($url, "://") + 3));
		}

		return $url;
	}


	/**
	 * @return int
	 */
	public function getObjId() {
		return $this->obj_id;
	}


	/**
	 * @param int $obj_id
	 */
	public function setObjId($obj_id) {
		$this->obj_id = $obj_id;
	}


	/**
	 * @return int
	 */
	public function getPin() {
		return $this->pin;
	}


	/**
	 * @param int $pin
	 */
	public function setPin($pin) {
		$this->pin = $pin;
	}


	/**
	 * @return boolean
	 */
	public function isObjOnline() {
		return $this->obj_online;
	}


	/**
	 * @param boolean $obj_online
	 */
	public function setObjOnline($obj_online) {
		$this->obj_online = $obj_online;
	}


	/**
	 * @return boolean
	 */
	public function isAnonymous() {
		return $this->anonymous;
	}


	/**
	 * @param boolean $anonymous
	 */
	public function setAnonymous($anonymous) {
		$this->anonymous = $anonymous;
	}


	/**
	 * @return boolean
	 */
	public function isTerminable() {
		return $this->terminable;
	}


	/**
	 * @param boolean $terminable
	 */
	public function setTerminable($terminable) {
		$this->terminable = $terminable;
	}


	/**
	 * @return string
	 */
	public function getStartDate() {
		return $this->start_date;
	}


	/**
	 * @param string $start_date
	 */
	public function setStartDate($start_date) {
		$this->start_date = $start_date;
	}


	/**
	 * @return string
	 */
	public function getEndDate() {
		return $this->end_date;
	}


	/**
	 * @param string $end_date
	 */
	public function setEndDate($end_date) {
		$this->end_date = $end_date;
	}


	/**
	 * @return boolean
	 */
	public function isReuseStatus() {
		return $this->reuse_status;
	}


	/**
	 * @param boolean $reuse_status
	 */
	public function setReuseStatus($reuse_status) {
		$this->reuse_status = $reuse_status;
	}


	/**
	 * @return string
	 */
	public function getLastAccess() {
		return $this->last_access;
	}


	/**
	 * @param string $last_access
	 */
	public function setLastAccess($last_access) {
		$this->last_access = $last_access;
	}


	/**
	 * @return boolean
	 */
	public function isFullScreen() {
		return $this->full_screen;
	}


	/**
	 * @param boolean $full_screen
	 */
	public function setFullScreen($full_screen) {
		$this->full_screen = $full_screen;
	}


	/**
	 * @return boolean
	 */
	public function isShowAttendees() {
		return $this->show_attendees;
	}


	/**
	 * @param boolean $show_attendees
	 */
	public function setShowAttendees($show_attendees) {
		$this->show_attendees = $show_attendees;
	}


	/**
	 * @return boolean
	 */
	public function isSelfVote() {
		return $this->self_vote;
	}


	/**
	 * @param boolean $self_vote
	 */
	public function setSelfVote($self_vote) {
		$this->self_vote = $self_vote;
	}


	/**
	 * @return boolean
	 */
	public function isKeyboardActive() {
		return $this->keyboard_active;
	}


	/**
	 * @param boolean $keyboard_active
	 */
	public function setKeyboardActive($keyboard_active) {
		$this->keyboard_active = $keyboard_active;
	}


	/**
	 * @return int
	 */
	public function getFrozenBehaviour() {
		return $this->frozen_behaviour;
	}


	/**
	 * @param boolean $frozen_behaviour
	 */
	public function setFrozenBehaviour($frozen_behaviour) {
		$this->frozen_behaviour = $frozen_behaviour;
	}


	/**
	 * @return int
	 */
	public function getResultsBehaviour() {
		return $this->results_behaviour;
	}


	/**
	 * @param int $results_behaviour
	 */
	public function setResultsBehaviour($results_behaviour) {
		$this->results_behaviour = $results_behaviour;
	}


	/**
	 * @return int
	 */
	public function getVotingHistory() {
		return $this->voting_history;
	}


	/**
	 * @param int $voting_history
	 */
	public function setVotingHistory($voting_history) {
		$this->voting_history = $voting_history;
	}


	/**
	 * @return string
	 */
	public function getPuk() {
		return $this->puk;
	}


	/**
	 * @param string $puk
	 */
	public function setPuk($puk) {
		$this->puk = $puk;
	}
}
