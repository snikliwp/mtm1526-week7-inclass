<?php 

$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$dns = getenv('DB_DNS');

$db = new PDO($dns, $user, $pass);

$db->exec('SET MANES utf8');

require_once 'filter-wrapper.php';