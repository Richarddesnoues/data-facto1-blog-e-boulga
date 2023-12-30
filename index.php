<?php

// Point d'entrée pour la page d'accueil
require __DIR__ . "/inc/classes/Article.php";
require __DIR__ . "/inc/classes/Author.php";
require __DIR__ . "/inc/classes/BigArticle.php";
require __DIR__ . "/inc/data.php";
// Inclusion des fichiers nécessaires comme les DATA



// je récupère le de la page demandée en parametre d'URL (page) avec le $_GET
// Par defaut la page que je souhaite consulter est la home
$pageToDisplay = 'home';

// Mais si je précise dans l'URL une autre page, alors c'est celle là qui sera affichée si elle existe et qu'elle n'est pas vide
if (isset($_GET['page']) && $_GET['page'] !== '') {
    $pageToDisplay = $_GET['page'];
}




//-- Page d'accueil --//
if ($pageToDisplay === 'home') {
    $articleList = $dataArticleList;
}


//-- Page Article --//
else if ($pageToDisplay === 'article') {
    $articleList = $dataArticleList;

    // je souhaite récupérer uniquement les données de l'article dont j'ai besoin et, les afficher 
    $articleId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    // filter_input renvoie null si le paramètre n'existe pas 
    // et false si le filtre de validation ne correspont pas
    if ($articleId !== false && $articleId !== null) {
        //$authorId contient maintenant un chiffre
        $articleToDisplay = $articleList[$articleId];

        $authorList = $dataAuthorList;
        $authorId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if ($authorId !== false && $authorId !== null) {
            //$authorId contient maintenant un chiffre
            $authorToDisplay = $authorList[$authorId];
        }
        // Si pas d'Id j'affiche la page d'accueil
        else {
            $pageToDisplay = 'home';
        }
        // page about_us
    } else if ($pageToDisplay === 'about_us') {
        $authorList = $dataAuthorList;
        $authorId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if ($authorId !== false && $authorId !== null) {
            //$authorId contient maintenant un chiffre
            $authorToDisplay = $authorList[$authorId];
        }
    }
}

//affichage 
require __DIR__ . '/inc/templates/header.tpl.php';
// Maintenant que je sais quelle page je vais afficher 
require __DIR__ . '/inc/templates/' . $pageToDisplay . '.tpl.php';
require __DIR__ . '/inc/templates/footer.tpl.php';
