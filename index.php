<?php

require_once(__DIR__ . '/variables.php');
require_once(__DIR__.'/functions.php');


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
    <?php include_once(__DIR__.'/header.php');?>
        <h1>Affichage des recettes</h1>
        <?php $number= 1; foreach(getRecipes($recipes) as $recipe): ?>

        <article>
            <h2><?php echo $number++.') '.$recipe['title']?></h2>
            <p><?php echo $recipe['recipe']?></p>
            <i><?php echo displayAuthor($recipe['author'], $users)?></i>

        </article>
        <?php endforeach?>
    </div>

    <?php require_once(__DIR__ . '/footer.php'); ?> 
</body>
</html>