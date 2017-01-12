<?php

class Router
{
	private $_uri = [];
	private $_method = [];

	public function add($uri, $method = null)
	{
		$this->_uri[] = '/' . trim($uri, '/');

		if ($method != null) {
			$this->_method[] = $method;
		}
	}// end add()

	public function submit()
	{
		if (isset($_GET['uri'])) {
			$uriGetParam = '/' .  $_GET['uri'];
		} else {
			$uriGetParam = '/';
		}

		foreach ($this->_uri as $key => $val) {

			if (preg_match("/^$val$/", $uriGetParam)) {

				if (is_string($this->_method[$key])) {
					$useMethod = $this->_method[$key];
					new $useMethod();
				} else {
					call_user_func($this->_method[$key]);
				}
			}
		}
	}// end submit()
}// end Router()