<?php
require("header.php");
?>
<?php


$id = $_POST["id"];
$nazwa = $_SESSION["login"];
$ocena = $_POST["ocena"];
$tresc = $_POST["tresc"];

$sql = "INSERT INTO recenzje (idDzbana, ocena, tresc, nick) VALUES ('$id', '$ocena', '$tresc', '$nazwa')";
$result = $conn->query($sql);
header("location: details.php?id=$id");
?>