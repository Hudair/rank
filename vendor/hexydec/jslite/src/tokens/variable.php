<?php
declare(strict_types = 1);
namespace hexydec\jslite;
use \hexydec\tokens\tokenise;

class variable {

	public const significant = true;
	public $content = '';

	/**
	 * Parses an array of tokens
	 *
	 * @param array &$tokens A tokenise object
	 * @return void
	 */
	public function parse(tokenise $tokens) : bool {
		if (($token = $tokens->current()) !== null) {
			$this->content = $token['value'];
			return true;
		}
		return false;
	}

	/**
	 * Minifies the internal representation of the document
	 *
	 * @return void
	 */
	public function minify() : void {

	}

	/**
	 * Compile as Javascript
	 *
	 * @return string The compiled HTML
	 */
	public function compile() : string {
		return $this->content;
	}
}