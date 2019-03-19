<?php
/**
 * Created by PhpStorm.
 * User: fedje
 * Date: 17-3-2019
 * Time: 19:16
 */

// Connectie met database zoals jullie gewend zijn...
$dbHost = "localhost";
$dbName = "login-example";
$dbUser = "root";
$dbPass = "";

/*   misschien is de try catch block nieuw voor jullie
 *   de try catch block probeert om de code in de try scope uit te voeren.
 *   lukt dat niet, dan wordt de code uitgevoerd die in de catch scope staat.
 *   Op deze manier heb je zelf wat beter in de hand wat er moet gebeuren als
 *   er iets in je applicatie fout gaat.
*/

try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<div class='note' style='background: #fedde9; padding: 10px; margin: 10px; font-family: courier'>
            <h4>OEI!</h4>
            Welkom op het oefen project voor het maken van een login- en registreersysteem.
            Zoals je wellicht zult zien zie je hieronder een foutmelding... 
            Voordat je deze voorbeeld applicatie kunt gebruiken zul je een aantal dingen moeten doen:
            <ol>    
                <li>Mysql server starten</li>
                <li>Database aanmaken genaamd 'login-example'</li>
                <li>Tabel daarin aanmaken met de benodigde velden</li>
            </ol>
            
            Je zult in deze applicatie de belangrijkste dingen zelf moeten coden. De projectopzet is exact hetzelfde
            hoe je het tijdens de lessen hebt geleerd. Er is ook binnen de code genoeg commentaar voorzien om je verder
            te helpen met het afmaken van deze demo- applicatie.
         </div>";
    die($e->getMessage());
}

/*
 * Important!
 * Als je met webapplicaties werkt, vraag je de webpagina op, doet wat wijzigingen en dan sluit je ooit die site
 * weer eens af. De browser is op dit moment de enige die jou echt 'kent' en kan onthouden op welke pagina's je bent
 * geweest. Het weet wanneer je een website start en wanneer je hem afsluit. Maar op het internet is er 1 probleem: De
 * webserver weet niet wie je bent of wat je doet omdat het HTTP protocol geen 'state' ondersteunt, ofwel, geen
 * herinneringen meer aan jou heeft nadat je een webrequest hebt gedaan.
 * Bij het verversen van de pagina behandelt de webserver je weer alsof hij je voor het eerst gezien heeft.
 *
 * Dit is lastig omdat je dan bijvoorbeeld na het inloggen op een site, na iedere pagina verzoek je zelf weer op nieuw
 * moet inloggen.
 *
 * Session variabelen lossen dit probleem op door gebruikers informatie op te slaan die over de verschillende webpagina's
 * op de server gebruikt kan worden.
 *
 * Onderstaande code ( session_start() ) zorgt er voor dat we vanaf dat moment met een variabele beschikbaar krijgen die altijd
 * beschikbaar is, maar meestal leeg, net als de _POST en de _GET en _SERVER variabele die we al tijdens de les
 * behandeld hebben. deze variabele heet de $_SESSION variabele.
 * Ook dit is een array waar je data uit kan halen en zelf in kan stoppen. Al deze data blijft behouden na dat je een
 * pagina ververst. Zo kun je bijvoorbeeld de id of iets anders unieks van een user opslaan en op die manier kun je onthouden
 * wie er is ingelogd. Hier maken we in deze applicatie gebruik van.
 *
 */
session_start();
