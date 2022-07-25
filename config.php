<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://bonieky.pc/loja_bony/");
	$config['dbname'] = 'bony_nova_loja';
	$config['host'] = 'bonieky.pc';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://bonieky/loja_bony/");
	$config['dbname'] = 'bony_nova_loja';
	$config['host'] = 'bonieky.pc';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

$config['default_lang'] = 'pt-br';

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>