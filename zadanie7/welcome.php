<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <style>
        body{
            padding-top: 10rem;
            font-size:2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: black;
        }
        button{
            font-size:1.3rem;
            border-radius: 10px;
            background: gray ;
        }
        .blue{color: blue;}
        .red{color: red;}
        .green{color: green;}
    </style>
<div class="<?php echo $_POST['colors']?>">
<?php
$name = $_POST['name'];
$subname = $_POST['subname'];
echo "Witaj $name $subname"; 
?>
</div>
<div>
<form action="index.php">
    <button action="index.php">Powrót</button>
</form>
</div>
</body>
</html>