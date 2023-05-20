<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP page</title>
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
                
    </style>
    <div>
    <h1>My first PHP page</h1>
    </div>
    <div>
    <form action="welcome.php" method="post">
    <input type="text" placeholder="Imie" name="name" id="">
    <input type="text" placeholder="Nazwisko" name="subname" id="">
    <select name="colors" id="">
        <option value="red">czerwony</option>
        <option value="green">zielony</option>
        <option value="blue">niebieski</option>
    </select>
    <button type="submit">Wyślij</button>
    </form>
    </div>
</body>
</html>