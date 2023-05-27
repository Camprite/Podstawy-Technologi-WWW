<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dzbany</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="content">
        
    <?php
 $conn = new mysqli("localhost", "root", "", "dzbanyv2db");
 $sql = "SELECT id, nazwa FROM kategorie";
 $result = $conn->query($sql);
 echo "<a href='index.php'> Wszyskie</a>";
 while($row = $result->fetch_object()) {
 echo " <a href='index.php?idKat={$row->id}'>{$row->nazwa}</a>";
 }
 ?>
   
<?php 
$sql = "SELECT id, nazwa, obrazek FROM dzbany";
if (isset($_GET["idKat"])) {
$idKat = $_GET["idKat"];
$sql .= " WHERE idKategorii = $idKat";
}
elseif (isset($_GET["fraza"])) {
$fraza = $_GET["fraza"];
$sql .= " WHERE nazwa LIKE '%$fraza%'";
}


$result = $conn->query($sql);

echo"<div class='mainContainer'>";
while($row = $result->fetch_object()) {
    
echo " <a class='mainItem' href='details.php?id={$row->id}'><img src='$row->obrazek'></img>{$row->nazwa}</a>";
}
echo"</div>"
?>

<form>
 <p>
 <input type="text" name="fraza">
 <input type="submit" value="Wyszukaj">
 </p>
 </form>
    </div>
    <div class="addItem">
        <form action="insertForm.php">
        <button type="submit"> Dodaj nowy przedmiot</button>
        </form>
    </div>

</body>
</html>