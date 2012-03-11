<?php 

$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$dns = getenv('DB_DSN');

$db = new PDO($dns, $user, $pass);

$db->exec('SET NAMES utf8');

require_once 'filter-wrapper.php';