
<?php 
    
    $id = $_GET["id"];
    $conn = new mysqli("localhost", "root", "", "dzbanyv2db");
    $sql = "DELETE  FROM dzbany
     WHERE dzbany.id='$id'";
$result = $conn->query($sql);
 $conn->close();
 header("location: index.php");
    ?>