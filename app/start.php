<?php

 
ini_set('display_errors','On' );
ini_set('html_errors','On');

define('APP_ROOT',__DIR__);
define('VIEW_ROOT',APP_ROOT.'/views/');
define('BASE_URL', 'http://localhost/phpCMS/');

$db = new PDO('mysql:host=localhost;dbname=phpCMS','root','');

require 'function.php';
