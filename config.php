<?php
$db_name = 'db_netextreme';
$db_host = 'localhost';
$db_root = 'root';
$db_password = '';

$dir = __DIR__;
$base = 'http://localhost/netextremeoo';
$pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_root, $db_password);