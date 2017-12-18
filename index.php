<?php
require_once __DIR__.'/vendor/autoload.php';
$app = new Silex\Application();
$app->get('/clima', function() use($app) {
    
	//
	
	
	return 'Jose Roberto García León, 099134585';
});
$app->run();