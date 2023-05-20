<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmy</title>
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
                    color: white;
                }
                input::placeholder{
                    text-align: center;
                    color: white;
                }

                button, input, select{
            font-size:1.3rem;
            border-radius: 10px;
            background: gray ;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        li{
            list-style-type: none;
        }
                
    </style>
    <div>
    <h1>Filmy</h1>
    </div>
    <div>
 <ul>
<form action="szczegoly.php" method="post">
    <li> <button type="submit" name="film" value="Fight Club">Fight Club </button></li>
    <li> <button type="submit" name="film" value="Psy">Psy </button></li>
    <li> <button type="submit" name="film" value="Incepcja">Incepcja </button></li>
    <li> <button type="submit" name="film" value="Matrix">Matrix </button></li>
    <li> <button type="submit" name="film" value="Szybcy i wściekli">Szybcy i wściekli </button></li>
    <li> <button type="submit" name="film" value="Interstellar">Interstellar</button></li>
    </form>
 </ul>
    </div>

</body>
</html>