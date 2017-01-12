<?php

class Main {
	// __construct() {

	// }

	public function isDevEnvironment()
	{
		$server = $_SERVER["HTTP_HOST"];

		if (strpos($server, 'dev') !== false || strpos($server, 'localhost') !== false) {
			return true;
		}

		return false;
	}


}