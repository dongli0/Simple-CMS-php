<?php

 
ini_set('display_errors','On' );

define('APP_ROOT',__DIR__);
define('BASE_URL', 'http://localhost\phpCMS\app');

$db = new PDO('mysql:host=localhost;dbname=phpCMS','root','');
