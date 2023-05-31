<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 require("menu.php");
?>
    <?php 
    $id = $_GET['id'];
    $conn = new mysqli("localhost", "root", "", "dzbanyv2db");
    $sql = "SELECT  dzbany.id,
                dzbany.nazwa AS dzbanNazwa,
                dzbany.idKategorii,
                dzbany.opis AS dzbanOpis,
                dzbany.pojemność,
                dzbany.wysokość,
                kategorie.nazwa AS kategoriaNazwa,
                kategorie.opis AS kategoriaOpis
                 FROM dzbany INNER JOIN kategorie ON dzbany.idKategorii = kategorie.id  WHERE dzbany.id='$id'";
$result = $conn->query($sql);
$imie ="";
$kategoria ="";
$opis ="";
$pojemnosc ="";
$wysokosc ="";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_object()) {
            $imie = $row->dzbanNazwa;
            $kategoria = $row->kategoriaNazwa;
            $opis = $row->dzbanOpis;
            $pojemnosc = $row->pojemność;
            $wysokosc = $row->wysokość;

            echo " 
            <form action='update.php' method='POST' enctype='multipart/form-data'*>
            <input type='hidden' name='id' value='$row->id'>
            Imie: <textarea style='resize: none;' name='imie' cols='30' rows='1'>$imie</textarea> <br>
            <input type='file' name='obrazek'> 
            Kategoria:  <select name='kategoria'>";
            $sqldzb = "SELECT  kategorie.id,
                kategorie.nazwa
               
                 FROM kategorie";
            $resultdzb = $conn->query($sqldzb);
            if($resultdzb->num_rows > 0){
                while($rowdzb = $resultdzb->fetch_object()) {

                    if($rowdzb->nazwa == $kategoria) {
                        echo"
                    
                    <option value='$rowdzb->id' selected>{$rowdzb->nazwa} </option>
                    
                    ";
                    }else
                    echo"
                    
                    <option value='$rowdzb->id'>{$rowdzb->nazwa} </option>
                    
                    ";
                    

                }
                }
            
            
            echo " </select >
            Opis: <textarea style='resize: none;' name='opis' cols='30' rows='1'>$opis</textarea><br>
            Pojemnosc: <textarea style='resize: none;' name='pojemnosc' cols='30' rows='1'>$pojemnosc</textarea><br>
            Wysokosc: <textarea style='resize: none;' name='wysokosc' cols='30' rows='1'>$wysokosc</textarea>
            <button type='submit'>Edytuj!</button>
            
            </form>
            
            ";
                    

                    
        }
    }
    
    
    $conn -> close();
    ?>
</body>
</html>