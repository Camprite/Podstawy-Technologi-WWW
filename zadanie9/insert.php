<?php 
$nazwa = $_POST["nazwa"];
$opis = $_POST["opis"];
$pojemnosc = $_POST["pojemnosc"];
$wysokosc = $_POST["wysokosc"];
$idKategorii = $_POST["idKategorii"];
$obrazek = basename($_FILES["obrazek"]["name"]);
move_uploaded_file($_FILES["obrazek"]["tmp_name"], "src/" . $obrazek);

// echo $nazwa;
// echo $opis;
// echo $pojemnosc;
// echo $wysokosc;
// echo $idKategorii;

// zmienne dla pozostałych parametrów
$conn = new mysqli("localhost", "root", "", "dzbanyv2db");
echo $obrazek;
$sql = "INSERT INTO dzbany (nazwa, opis, pojemność, wysokość, idKategorii, obrazek) VALUES
 ('$nazwa','$opis', $pojemnosc, $wysokosc, $idKategorii, 'src/$obrazek')";
$result = $conn->query($sql);
$conn->close();
header("location: index.php");


?>