<?php

class Utmz_cookie_parser {

	public $source;
	public $medium;
	public $term;
	public $content;
	public $campaign;
	public $gclid;
	public $utmz;
	public $utmz_domainHash;
	public $utmz_timestamp;
	public $utmz_sessionNumber;
	public $utmz_campaignNumber;

	//Contstructor fires method that parses and assigns property values
	function __construct() {
		$this->_set_utmz();
	}

	//Grab utmz cookie if it exists
	private function _set_utmz() {
		if (isset($_COOKIE['__utmz'])) {
			$this->utmz = $_COOKIE['__utmz'];
			$this->_parse_utmz();
		} else {
			return false;
		}

	}

	//parse utmz cookie into variables
	private function _parse_utmz() {

		//Break cookie in half
		$utmz_b = strstr($this->utmz, 'u');
		$utmz_a = substr($this->utmz, 0, strpos($this->utmz, $utmz_b) - 1);

		//assign variables to first half of cookie
		list($this->utmz_domainHash, $this->utmz_timestamp, $this->utmz_sessionNumber, $this->utmz_campaignNumber) = explode('.', $utmz_a);

		//break apart second half of cookie
		$utmzPairs = array();
		$z = explode('|', $utmz_b);
		foreach ($z as $value) {
			$v = explode('=', $value);
			$utmzPairs[$v[0]] = $v[1];
		}

		//Variable assignment for second half of cookie
		foreach ($utmzPairs as $key => $value) {
			switch ($key) {
			case 'utmcsr':
				$this->source = $value;
				break;
			case 'utmcmd':
				$this->medium = $value;
				break;
			case 'utmctr':
				$this->term = $value;
				break;
			case 'utmcct':
				$this->content = $value;
				break;
			case 'utmccn':
				$this->campaign = $value;
				break;
			case 'utmgclid':
				$this->gclid = $value;
				break;
			default:
				//do nothing
			}
		}

	}

}