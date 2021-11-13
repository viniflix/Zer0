<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'pass');
define('DB', 'zer0');

$conexao =mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');