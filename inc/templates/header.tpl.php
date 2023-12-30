<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/inc/assets/css/header.css">
    <link rel="stylesheet" href="/inc/assets/css/footer.css">
    <link rel="stylesheet" href="/inc/assets/css/global.css">
    <link rel="stylesheet" href="/inc/assets/css/home.css">
    <link rel="stylesheet" href="/inc/assets/css/about_us.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/logo_fav.svg">
    <link rel="mask-icon" href="assets/img/logo_fav.svg">
    <script src="/inc/assets/js/header.js" defer></script>
    <script src="/inc/assets/js/footer.js" defer></script>
    <script src="/inc/assets/js/article.js" defer ></script>

    <title>Accueil</title>
</head>

<header>
    <a id="aHeaderLogo" href="index.php">
        <img id="logo_header" src="/inc/assets/img/logo-black.svg" alt="logo du site Blog-e-Boulga">
    </a>

    <ul id="list_nav_header">
        <li><a href="index.php"><img src="/inc/assets/img/home.svg" alt="icône d'une maison" /> Accueil</a></li>
        <li><a href="index.php?page=about_us"><img src="/inc/assets/img/buste.svg" alt="icône d'un buste d'homme" /> Qui sommes-nous ?</a></li>
        <li><a href="index.php#contactez_nous.php"><img src="/inc/assets/img/enveloppe.svg" alt="icône d'une enveloppe" /> Contactez-nous</a></li>
    </ul>

    <button id="burger_icon" class="menuBurgerGlobal" aria-label="Main Menu">
        <svg width="50" height="50" viewBox="0 0 100 100">
            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
            <path class="line line2" d="M 20,50 H 80" />
            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
    </button>
</header>

<ul id="burger_menue">
    <hr class="burger_separation_header">
    <li><a href="index.php"><img src="/inc/assets/img/home.svg" alt="icône d'une maison" /> Accueil</a></li>
    <hr class="burger_separation">
    <li><a href="about_us.tpl.php"><img src="/inc/assets/img/buste.svg" alt="icône d'un buste d'homme" /> Qui sommes-nous ?</a></li>
    <hr class="burger_separation">
    <li><a href="#contactez_nous.php"><img src="/inc/assets/img/enveloppe.svg" alt="icône d'une enveloppe" /> Contactez-nous</a></li>
    <hr class="burger_separation">
</ul>
<body>
    <main>