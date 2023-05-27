<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczegóły</title>
</head>
<body>
<style>
    .object{
        display:flex;
        flex-direction: column;
        align-items: center;
    }
    .name::before{
        content:"Imie: ";
    }
    .description::before{
        content:"Opis: ";
    }
    .capacity::before{
        content:"Pojemność: ";
    }
    .height::before{
        content:"Wysokość: ";
    }
</style>


<div class="main">


<?php 
echo "
<button class='back'>
<a href='index.php'>Powrót </a>
</button>
";
?>


<?php 
$id = $_GET["id"];
$conn = new mysqli("localhost", "root", "", "dzbanyv2db");











echo "<span class='object'>";
$sql = "SELECT AVG(ocena) AS srednia FROM recenzje WHERE idDzbana=$id";
$result = $conn->query($sql);
$srednia = $result->fetch_object()->srednia;

$sql = "SELECT idKategorii, k.nazwa AS nazwaKat, d.nazwa, obrazek, d.opis, pojemność,
wysokość FROM dzbany d, kategorie k WHERE d.id=$id AND idKategorii=k.id";
$result = $conn->query($sql);
$obrazek = $result->fetch_object()->obrazek;
echo "<img src='{$obrazek}'>";
echo "Srednia: $srednia";


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

if($result->num_rows > 0){
    while($row = $result->fetch_object()) {
        
        echo "<span class='name'> {$row->dzbanNazwa} </span>";
        echo "<span class='description'>{$row->dzbanOpis}</span>";
        echo "<span class='capacity'>{$row->pojemność}</span>";
        echo "<span class='height'>{$row->wysokość}</span>";
        echo "<span class='category'>{$row->kategoriaNazwa}</span>";
        echo "<span class='category'>{$row->kategoriaOpis}</span>";
        echo "<a href='updateForm.php?id={$row->id}'>Edytuj rekord </a>";
        echo "<a href='delete.php?id={$row->id}'>Usuń rekord </a>";
        echo " </span>";
    }

} else {
    echo "Brak podanego rekordu";
}

?>

<form action="insertReview.php" method="post">
<input type="hidden" name='id' value="<?php echo $_GET["id"] ?>" > </input> 
<input type="text" name="nazwa" id="">
<select name="ocena" id="">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<textarea name="tresc" id="" cols="30" rows="2"></textarea>


<button type="submit">Wyślij!</button>
</form>
</div>
<?php 
$sql = "SELECT nick, ocena, tresc, data FROM recenzje WHERE idDzbana=$id";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_object()) {
echo"Nazwa: $row->nick <br>";
echo"Ocena: $row->ocena <br>";
echo"Tresc: $row->tresc <br>";

    }};
    if($result->num_rows == 0){
        echo"Brak ocen";
    }
        $conn->close();
?>
    
</body>
</html>