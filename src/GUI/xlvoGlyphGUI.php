<?php

namespace LiveVoting\GUI;

use ilGlyphGUI;
use ilLiveVotingPlugin;
use srag\DIC\DICTrait;

/**
 * Class xlvoGlyphGUI
 *
 * @package LiveVoting\GUI
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 */
class xlvoGlyphGUI extends ilGlyphGUI {

	use DICTrait;
	const PLUGIN_CLASS_NAME = ilLiveVotingPlugin::class;


	/**
	 * Get glyph html
	 *
	 * @param string $a_glyph glyph constant
	 * @param string $a_text  text representation
	 *
	 * @return string html
	 */
	static function get($a_glyph, $a_text = "") {
		if ($a_glyph == 'remove') {
			self::$map[$a_glyph]['class'] = 'glyphicon glyphicon-' . $a_glyph;
		}
		if (!isset(self::$map[$a_glyph])) {
			self::$map[$a_glyph]['class'] = 'glyphicon glyphicon-' . $a_glyph;
		}

		return parent::get($a_glyph, $a_text) . ' ';
	}


	/**
	 * @param $a_glyph
	 *
	 * @return string
	 */
	static function gets($a_glyph) {
		self::$map[$a_glyph]['class'] = 'glyphicons glyphicons-' . $a_glyph;

		return parent::get($a_glyph, '') . ' ';
	}
}
