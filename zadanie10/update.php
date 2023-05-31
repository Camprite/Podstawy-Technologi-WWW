<?php 
$id = $_POST['id'];
$imie = $_POST['imie'];
$kategoria = $_POST['kategoria'];
$opis = $_POST['opis'];
$pojemnosc = $_POST['pojemnosc'];
$wysokosc = $_POST['wysokosc'];
$obrazek = basename($_FILES["obrazek"]["name"]);
move_uploaded_file($_FILES["obrazek"]["tmp_name"], "src/" . $obrazek);
// echo $id;
// echo $imie  ;
// echo $kategoria    ;
// echo $opis   ;
// echo $pojemnosc ;
// echo $wysokosc     ;
$conn = new mysqli("localhost", "root", "", "dzbanyv2db");
    $sqlup = "UPDATE dzbany
    SET nazwa='$imie',
     idKategorii='$kategoria',
     opis='$opis',
     pojemność='$pojemnosc',
     wysokość='$wysokosc',
     obrazek='src/$obrazek'
    WHERE id='$id'";
$resultup = $conn->query($sqlup);
$conn -> close();
header("location: details.php?id=$id");


?>