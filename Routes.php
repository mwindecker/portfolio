<?php

$router = new Router();

$router->add('/', function() {
	View::create('home');
});

$router->add('/test', function() {
	View::create('test');
});

$router->submit();