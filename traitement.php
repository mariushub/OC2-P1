<?php 
    // get all form data
    $titre = trim($_POST['titre'] ?? '');
    $artiste = trim($_POST['artiste'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $image = trim($_POST['image'] ?? '');

    // check valid data
    if (
        empty($titre) 
        || empty($artiste)
        || mb_strlen($description) < 3
        || !filter_var($image, FILTER_VALIDATE_URL)
        || !str_starts_with($image, 'https://')
    ) {
        header('Location: ajouter.php');
        exit;
    }

    // XSS fix
    $titre = htmlspecialchars($titre);
    $artiste = htmlspecialchars($artiste);
    $description = htmlspecialchars($description);
    $image = htmlspecialchars($image);

    echo('ok');