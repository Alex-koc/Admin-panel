<?php

$id = $_GET['id'];

require_once 'db.php';
$stmt = $pdo->query("DELETE FROM `country` WHERE id = ".$id);

header('Location: table.php');