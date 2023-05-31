<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Rekord</title>
</head>
<body>
<?php
 require("menu.php");
?>
    <?php 

    //error handeling dla wprowadzenia zdjęcia które już jest w bazie
    //(Porównuje nazwy plików)
    $error = 0;
    if(isset($_GET["error"])){
        $error = $_GET["error"];
        if($error ==1){
        echo "<script>alert('PLIK O PODANEJ NAZWIE JUŻ ISTNIAŁ W BAZIE, REKORD NIE ZOSTAŁ DODANY')</script>";
        }
    }
    



    echo"
        <form action='insert.php' method='post'  enctype='multipart/form-data'>
        <input type='text' name='nazwa' placeholder='nazwa' id='' value=''>
        <input type='text' name='opis' placeholder='opis' id='' value=''>
        <input type='number' name='pojemnosc' placeholder='pojemnosc' id='' value=''>
        <input type='number' name='wysokosc' placeholder='wysokosc' id='' value=''>
        <input type='file' name='obrazek'>
        <select name='idKategorii' >
        ";
        $conn = new mysqli("localhost", "root", "", "dzbanyv2db");
        $sql = "SELECT id,nazwa FROM kategorie";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()) {
                echo"<option value='$row->id'>{$row->nazwa} </option>";

            }}else
            {
                echo"NIE ZNALEZIONO KATEGORI";
            }


    
    echo"    </select>
        <button type='submit'>Dodaj rekord</button>
        </form>
        
        
        "
    ?>
    

    
</body>
</html>