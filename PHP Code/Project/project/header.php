<?php
    require 'config.php';
?>

<!-- Even heel easy html code, omdat de focus nu op het inlogsysteem ligt en niet op fancy looks :)  -->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<header>
        <div class="container">
            <div class="header">
                <div class="title">
                    <h1>N<span>A</span>P</h1>
                </div>

                <nav>


        <?php
        /*
         * Hier checken we of we al ooit eens een 'id' key hebben opgeslagen in de
         * $_SESSION variabele. de ENIGE plek waar we dit doen is als we onszelf inloggen
         * en onze gegevens kloppen. Kijk maar in de logincontroller.php
         *
         * Als we dus al een id in onze session hebben (dus onze klant is al ingelogd) willen we niet dat onze
         * klanten zich nogmaals kunnen registreren of inloggen...
         *
         */
        if ( isset($_SESSION['id']) ) {
            echo "You are currently logged in. Want to <a href='register.php'>logout?</a>";
        } else {
            echo "<a href='login.php'>Login</a> &nbsp; or &nbsp; <a href='register.php'> Sign-up </a>";
        }
        ?>
                </nav>
            </div> <!-- end of header -->
        </div> <!-- end of container -->
</header>