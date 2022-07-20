<?php 
session_start ();
$host = "localhost";
$user = "cassette_NASSAR";
$passwort = "cassette_bar_123!";
$datenbank_name = "Cassette_BAR";

$connect = mysqli_connect($host,$user,$passwort,"$datenbank_name");
if(!$connect){
	die('Could not Connect MySql Server:' );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cassette BAR</title>
    <link rel="stylesheet" href="styles/deco.css"/>
</head>

<body>


    
<nav>
    <ul>

        <li>Home page</li>
        <li> About us</li>
        <li><a>Cocktail menu</a>
        <ul class = "types">
            <li><a>Cocktails</a></li>
            <li><a>Virgin Drinks</a></li>
            <li><a>BEER</a></li>
            <li><a>Whisky</a></li>
        </ul>
        </li>
        <li>Events</li>
    </ul>
</nav>





<footer>

<div id= "new">
    <ul >
        <li><a href="https://twitter.com/julesforrest">Twitter</a></li>
        <li><a href="https://codepen.io/julesforrest">Codepen</a></li>
        <li><a href="mailto:ebraheem.nas@gmail.com">Email</a></li>
        <li><a href="https://dribbble.com/julesforrest">Dribbble</a></li>
        <li><a href="https://github.com/julesforrest">Github</a></li>
        <li>
            <p>👋</p>
        </li>
    </ul>
</div>

<P>&copy; 2021 - Cassette BAR</P>

</footer>

    
</body>
</html>