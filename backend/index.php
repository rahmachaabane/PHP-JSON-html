<?php
include 'connexion.php'; 

$sql = "SELECT * FROM article"; 

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Afficher les résultats
    if ($stmt->rowCount() > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Title</th><th>Image</th><th>HeaderImage</th><th>Introduction</th><th>Description</th><th>LastMod</th><th>Language</th><th>KeyWords</th><th>State</th><th>NumVisit</th><th>IdTheme</th><th>IdUser</th><th>IdHost</th></tr>"; // Ajuste les en-têtes selon tes colonnes
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>"; 
            echo "<td>" . $row["Title"] . "</td>"; 
            echo "<td>" . $row["Image"] . "</td>"; 
            echo "<td>" . $row["HeaderImage"] . "</td>"; 
            echo "<td>" . $row["Introduction"] . "</td>"; 
            echo "<td>" . $row["Description"] . "</td>";
            echo "<td>" . $row["LastMod"] . "</td>"; 
            echo "<td>" . $row["Language"] . "</td>"; 
            echo "<td>" . $row["KeyWords"] . "</td>"; 
            echo "<td>" . $row["State"] . "</td>"; 
            echo "<td>" . $row["NumVisit"] . "</td>"; 
            echo "<td>" . $row["IdTheme"] . "</td>"; 
            echo "<td>" . $row["IdUser"] . "</td>"; 
            echo "<td>" . $row["IdHost"] . "</td>"; 

            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun résultat trouvé.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;
?>
