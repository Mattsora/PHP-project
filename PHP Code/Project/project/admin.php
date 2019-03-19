<?php
/**
 * Created by PhpStorm.
 * User: fedje
 * Date: 17-3-2019
 * Time: 19:15
 */

/*
 * Hier checken we of de gebruiker inderdaad is ingelogd ( $_SESSION['id'] wordt alleen aangemaakt
 * als het inloggen in de logincontroller goed is gegaan, neem maar even een kijkje daar.
 * Is dat niet zo, dan helaasch, mag je niet deze site bekijken!
 */
if (!isset($_SESSION['id'])) {
    die("I'm sorry, this page is for logged in AMO students only.");
}

require 'header.php';

?>

<h1>Welcome to AMO Login system Admin Page </h1>
<p>Still nothing special to see here but that's not the point.</p>
<p>you can only get here while being logged in. Try to close your browser and you'll that you are still logged in!</p>


<?php require 'footer.php'; ?>