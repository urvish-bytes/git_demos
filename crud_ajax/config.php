<?php
	include 'mysqli.class.php';

$config = array();
$config['host'] = 'localhost';
$config['user'] = 'root';
$config['pass'] = '';
$config['table'] = 'crud_ajax';

$db = new DB($config);