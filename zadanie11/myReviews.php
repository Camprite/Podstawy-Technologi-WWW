<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje recenzje</title>
</head>
<body>
<?php
 require("menu.php");
?>


<?php 
echo "
<button class='back'>
<a href='index.php'>Powrót </a>
</button>
";
?>    

    <?php 
    $login = $_SESSION["login"];
    $sql = "SELECT ocena, tresc, data, d.id AS idDzbana, nazwa FROM recenzje r, dzbany d
    WHERE d.id = idDzbana AND nick = '$login'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_object()) {
            echo "
            <div class='review'>
            <p class='ocena'> $row->ocena </p>
            <p class='tresc'> $row->tresc </p>
            <p class='dzban'> $row->nazwa </p>
            <p class='czas'> $row->data </p>
            </div>
                ";

        }}else
        {
            echo"Brak recenzji";
        }
    
    
    
    ?>
</body>
</html>