
<?php 
    $id = $_GET["id"];
    $conn = new mysqli("localhost", "root", "", "dzbanyv2db");



    $sql =  "SELECT id, obrazek FROM dzbany WHERE id=$id";
    $result = $conn->query($sql);

    $out = $result->fetch_object();
    $obrazek = $result->obrazek;
    echo $obrazek;

    unlink("$obrazek");

    
    $sql = "DELETE  FROM dzbany
     WHERE dzbany.id='$id'";
$result = $conn->query($sql);
 $conn->close();
//  header("location: index.php");
    ?>