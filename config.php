<?php
$config['host'] = 'localhost';
$config['user'] = 'root';
$config['pass'] = '';
$config['db'] = 'link';

$db = new PDO('mysql:host='.$config['host'].';dbname='.$config['db'].';charset=utf8', $config['user'], $config['pass']);
?>