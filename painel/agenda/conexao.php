<?php

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASS', 'pass');
define('DBNAME', 'zer0');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
