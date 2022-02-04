
<?php
require 'vendor/autoload.php';
use DDEV\Request;
use DDEV\Router;

require Router::load('routes.php')->direct(Request::uri());