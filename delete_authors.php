<?php

$id = $_GET['id'];

require_once 'db.php';
$stmt = $pdo->query("DELETE FROM `authors` WHERE id = ".$id);

header('Location: table.php');