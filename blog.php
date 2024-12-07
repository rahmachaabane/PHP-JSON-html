<?php
$json = file_get_contents('http://localhost/smartconseil/backend/api.php'); // Appel de l'API
$data = json_decode($json, true); // Décode le JSON en tableau PHP
?>

<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            width: 100%;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Articles</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php if (!empty($data)): ?>
                <?php foreach ($data as $article): ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/<?php echo htmlspecialchars($article['Image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($article['Title']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($article['Title']); ?></h5>
                                <p class="card-text mb-1"><?php echo htmlspecialchars($article['Introduction']); ?></p>
                            </div>
                            <div class="card-footer">
                                <p class="text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                    </svg>&nbsp;<?= htmlspecialchars($article['LastMod']) ?>&nbsp;&nbsp;
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z"/>
                                    </svg>&nbsp;<?= htmlspecialchars($article['IdTheme']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun article trouvé.</p>
            <?php endif; ?>
        </div> 
    </div>
</body>
</html>

<?php include 'footer.php'; ?>
