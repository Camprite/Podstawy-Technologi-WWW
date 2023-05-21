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
    
    echo"
        <form action='insert.php' method='post'>
        <input type='text' name='nazwa' placeholder='nazwa' id='' value=''>
        <input type='text' name='opis' placeholder='opis' id='' value=''>
        <input type='text' name='pojemnosc' placeholder='pojemnosc' id='' value=''>
        <input type='text' name='wysokosc' placeholder='wysokosc' id='' value=''>
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