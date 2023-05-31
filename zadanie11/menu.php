<?php 
require("db.php");
require("session.php");
?>
<header>
<p>
 <a href="index.php">Strona główna</a>
 <a href="favourites.php">Ulubione</a>
 <a href="myReviews.php">Moje recenzje</a>
 Witaj <?= $_SESSION["login"] ?>!
 <a href="logout.php">Wyloguj</a>
</p>
    </header>
    