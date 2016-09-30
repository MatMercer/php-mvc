<?php

// set the timezone
date_default_timezone_set('America/Sao_Paulo');

// composer autoloader
require_once '../vendor/autoload.php';

// load database
require_once 'database.php';

// load the app
require_once 'core/App.php';

// load the controller
require_once 'core/Controller.php';