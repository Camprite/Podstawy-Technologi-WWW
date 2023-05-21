<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dzbany</title>
</head>
<body>
    <div class="addItem">
        <form action="insertForm.php">
        <button type="submit"> Dodaj nowy przedmiot</button>
        </form>
    </div>
    <div class="content">
    <?php
    $conn = new mysqli("localhost", "root", "", "dzbanyv2db");
    $sql = "SELECT id, nazwa FROM dzbany";
    $result = $conn->query($sql);
    //  ->  to po prostu wywoałenie metody coś jak w javie obiekt.metoda
    // tylko że php jest głupi
    if ($result->num_rows > 0) {
        while($row = $result->fetch_object()) {
            echo "<li>
            <a href='details.php?id={$row->id}'>{$row->nazwa}
            
            </a>
            </li>";
           }
       } else {
        echo "Nie masz żadnych dzbanów w swojej kolekcji";
       }
       $conn->close();
    ?>


    </div>
    
</body>
</html>