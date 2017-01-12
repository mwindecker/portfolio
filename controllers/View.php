<?php

class View
{
	public function create($template)
	{
		include 'views/' . $template . '.phtml';
	}
}