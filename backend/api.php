<?php
header('Content-Type: application/json'); // Indique que le contenu est en JSON

include 'connexion.php'; // Inclure la connexion à la base de données

$sql = "SELECT * FROM article"; // Requête pour récupérer tous les articles

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupérer les résultats

    echo json_encode($articles); // Convertir les résultats en JSON
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]); // Gérer les erreurs
}

$conn = null; // Fermer la connexion
?>
