<?php 
$id = $_POST['id'];
$imie = $_POST['imie'];
$kategoria = $_POST['kategoria'];
$opis = $_POST['opis'];
$pojemnosc = $_POST['pojemnosc'];
$wysokosc = $_POST['wysokosc'];
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
     wysokość='$wysokosc'
    WHERE id='$id'";
$resultup = $conn->query($sqlup);
$conn -> close();
header("location: details.php?id=$id");


?>