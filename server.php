<?php

/**
 * Used for PHP built-in server
 * NOTE: For testing only!
 *
 * php -S 127.0.0.1:8000 server.php if using VPN
 */

chdir(__dir__);
require 'public/autoloader.php';
$server = new \dev\DevelopmentServer('/tester');
$server->serve();
