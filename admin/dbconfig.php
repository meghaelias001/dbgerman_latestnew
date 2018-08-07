<?php
session_start();
require_once ('MysqliDb.php');
$mysqli = new mysqli ('localhost', 'root', '', 'db');
$db = new MysqliDb ($mysqli);
?>