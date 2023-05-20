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
            color:white;
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
        .szczegoly{
            display:flex;
            flex-direction: column;
            align-items: center;

        }
        img{
            max-width: 50vw;
            max-height: 50vh;
        }
</style>
<div class="szczegoly">
<?php
$name = $_POST['film'];
echo $name; 
switch ($name){
    case "Szybcy i wściekli":
        echo "<span> Reżyser: Rob Cohen </span>";
        echo "<span> Czas trwania: 1:46:51</span>";
        echo "<span> Box office: 38 milionów</span>";
        echo "<span> Rok produkcji: 21 września 2001</span>";
        echo "<span> <img src='src/siw.jpg'></span>";
        break;
    case "Psy":
        echo "<span> Reżyser: Władysław Pasikowski </span>";
        echo "<span> Czas trwania: 104 min </span>";
        echo "<span> Box office: brak danych </span>";
        echo "<span> Rok produkcji: 20 listopada 1992  </span>";
        echo "<span> <img src='src/psy.jpg'></span>";
        break;
    case "Fight Club":
        echo "<span> Reżyser: Davida Finchera </span>";
        echo "<span> Czas trwania: 2 godz. 19 min </span>";
        echo "<span> Box office: 63 miliony USD </span>";
        echo "<span> Rok produkcji: 11 lutego 2000 </span>";
        echo "<span> <img src='src/fc.jpg'></span>";
        break;
    case "Incepcja":
        echo "<span> Reżyser: Christopher Nolan </span>";
        echo "<span> Czas trwania: 148 minut </span>";
        echo "<span> Box office: 160 mln USD </span>";
        echo "<span> Rok produkcji: 30 lipca 2010 </span>";
        echo "<span> <img src='src/inc.jpg'></span>";
        break;
    case "Matrix":
        echo "<span> Reżyser: Lana Wachowski, Lilly Wachowski </span>";
        echo "<span> Czas trwania: 	136 minut </span>";
        echo "<span> Box office: 467,2 miliona USD </span>";
        echo "<span> Rok produkcji: 13 sierpnia 1999 </span>";
        echo "<span> <img src='src/mat.jpg'></span>";
        break;
    case "Interstellar":
        echo "<span> Reżyser: Christopher Nolan </span>";
        echo "<span> Czas trwania: 169 min </span>";
        echo "<span> Box office: 701,7 miliona USD </span>";
        echo "<span> Rok produkcji: 7 listopada 2014  </span>";
        echo "<span> <img src='src/int.jpg'></span>";
        break;

}
?>
</div>
<div>
<form action="index.php">
    <button action="index.php">Powrót</button>
</form>
</div>
</body>
</html>