<?php

// Init Silex
$app = new Silex\Application();

//init config environements tab
$app['config'] = $config;
$app['debug'] = $app['config']['debug'];
