<?php
require 'config.php';

$user = $_POST['email'];
$pass = $_POST['password'];
/*
 * Dit is een webserver only script, waar je alleen mag komen als je via een form
 * data verstuurd, en niet als je via de url hier naar toe komt. Iedereen die dat doet
 * sturen we terug naar index.php
 *
 */
if ($_SERVER['REQUEST_METHOD'] !== 'POST' ) {
    header('location: index.php');
    exit;
}


if ($_POST['type'] === 'login') {
    if (is_null($_POST["email"]) || is_null($_POST["password"])) {
        $message = '<label>All fields are required</label>';
    }
    else {
        $query = "SELECT * FROM accounts WHERE email = :email AND password = :password";
        $statement = $db->prepare($query);
        $statement->execute(
            array(
                ':email' => $_POST["email"],
                ':password' => $_POST["password"]
            )
        );
        $count = $statement->rowCount();
        if ($count > 0) {
            $_SESSION["email"] = $_POST["email"];
            header("Location:admin.php");
        }
        else
        {
            header('Location:login.php');

        }
}

    /*
     * Hier komen we als we de login form data versturen.
     * things to do:
     * 1. Checken of gebruikersnaam EN email in de database bestaat met de ingevoerde data
     * 2. Indien ja, een $_SESSION['id'] vullen met de id van de persoon die probeert in te loggen.
     * 3. gebruiker doorsturen naar de admin pagina
     *
     * 3. Indien nee, gebruiker terugsturen naar de login pagina met de melding dat gebruikersnaam en/of
     * wachtwoord niet in orde is.
     *
     */
    exit;
}

if ($_POST['type'] === 'register') {
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO accounts(email, password) 
        VALUES (:email, :password)";

    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':email' => $user,
        ':password' => $hashed_password
    ]);
    header('Location:login.php');
    /*var_dump($_POST);
    /*
     * Hier komen we als we de register form data versturen
     * things to do:
     *
     * 1. Checken of er al iemand met dit emailadres of username bestaat
     * 2. Indien nee, eerst checken of de password en password_confirm inderdaad hetzelfde ingevoerde is.
     * 3. Dan gebruiker inserten in de database, zodat deze kan gaan inloggen.
     * 4. Gebruiker doorsturen naar de nieuwe inlog pagina.
     *
     * 5. Indien ja, gebruiker terugsturen naar register form met de melding dat gebruikersnaam en/of wachtworod niet op
     * orde is.
     *
     *
     */

    exit;
}





