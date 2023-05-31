
<?php 
    $id = $_GET["id"];
    $conn = new mysqli("localhost", "root", "", "dzbanyv2db");
  
    $sql =  "SELECT id, obrazek FROM dzbany WHERE id=$id";
    $result = $conn->query($sql);
    $out = $result->fetch_object();
    $obrazek = $out->obrazek;
    $path = "src/";
   
   
    $sql =  "SELECT id, obrazek FROM dzbany";
    $result = $conn->query($sql);
    $counter = 0; //Licznik od ilości dzbanów mający to samo zdjęcie
    if($result->num_rows > 0){
        while($row = $result->fetch_object()) {
    if($row->obrazek == $obrazek){
        $counter++;
    }
        }}
  
// Jeśli tylko jeden dzban korzysta z pliku, usuń go
if($counter<=1){
    unlink("$obrazek");
}
    
    $sql = "DELETE FROM dzbany
     WHERE dzbany.id='$id'";
$result = $conn->query($sql);
 $conn->close();
 header("location: index.php");
    ?>