<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ulubione</title>
</head>
<body>
    
<?php
require("menu.php");
$idUzytkownika = $_SESSION["id"];
$sql = "SELECT d.id, d.nazwa, d.obrazek FROM dzbany d, ulubione u WHERE u.idDzbana = d.id
AND idUzytkownika = $idUzytkownika";
$result = $conn->query($sql);

echo"<div class='mainFavContainer'>";
while($row = $result->fetch_object()){
    echo "
    <p>{$row->nazwa} </p>
    <img src='$row->obrazek'>
    
    
    ";
}
echo"</div>";

?>
</body>
</html>