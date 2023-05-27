<?php
$conn = new mysqli("localhost", "root", "", "dzbanyv2db");


$id = $_POST["id"];
$nazwa = $_POST["nazwa"];
$ocena = $_POST["ocena"];
$tresc = $_POST["tresc"];

$sql = "INSERT INTO recenzje (idDzbana, ocena, tresc, nick) VALUES ('$id', '$ocena', '$tresc', '$nazwa')";
$result = $conn->query($sql);

?>