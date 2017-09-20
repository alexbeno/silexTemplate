<?php

define('ROOT_PATH', __DIR__.'/..');
define('PUBLIC_PATH', ROOT_PATH.'/web');
define('SITE_PATH', ROOT_PATH.'/site');
define('BUILD_PATH', ROOT_PATH.'/builder');

// Require dependendies
// require_once BUILD_PATH.'/vendor/autoload.php';
$loader = require_once BUILD_PATH.'/vendor/autoload.php';
$loader->addPsr4('Site\\', SITE_PATH.'/src');

// init environement
require_once SITE_PATH.'/config/environements.php';

// Init Silex
require_once SITE_PATH.'/config/init.php';

//load services
require_once SITE_PATH.'/config/services.php';

//connect to db
require_once SITE_PATH.'/config/db.php';

// Middlewares
require_once SITE_PATH.'/config/db.php';

//init road
require_once SITE_PATH.'/config/road.php';

//default middlewares
require_once SITE_PATH.'/src/middlewares/default.php';

// Run Silex
$app->run();
$app->boot();
