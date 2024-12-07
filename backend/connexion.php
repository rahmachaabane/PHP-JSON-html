<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "smartconseil";

try {
    // Créer une instance de PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //  echo "Connexion réussie à la base de données '$dbname' !";
} catch (PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}
?>
