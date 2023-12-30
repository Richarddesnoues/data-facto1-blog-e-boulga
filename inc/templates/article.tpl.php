<p><a id="go_back" href="index.php">Revenir à l'accueil</a></p>


<section class="body_text">
    <h1 id="article_title">
        <?= $articleToDisplay->title ?>
    </h1>
    

    <p class="article_P">
        <?= $articleToDisplay->description ?>
    </p>
</section>
<section id="img_section">
    <img id="article_img" src="<?= $articleToDisplay->coverImg ?>" alt="<?= $articleToDisplay->altImg === "" ? "Image de l'article " . $articleToDisplay->title : $articleToDisplay->altImg; ?>
            " />
</section>

<section class="body_text">
    <h2 class="body_title">Introduction</h2>
    <p class="article_P">
        <?php echo $articleToDisplay->introduction ?>
    </p>

    <h2 class="body_title">Le détail</h2>
    <p class="article_P">
        <?php echo $articleToDisplay->detail ?>
    </p>
</section>

<a href="index.php?page=about_us&id=" id="author_section">
    <aside id="left_author">
    
    
        <img id="author_img" src="<?= $authorToDisplay->img ?>" alt="Photo de l'auteur <?php echo $authorToDisplay->authorFirstName ?>   <?= $authorToDisplay->authorLastName ?>" />
        <h3 id="author_name"><?php echo $authorToDisplay->authorFirstName ?>  <?= $authorToDisplay->authorLastName ?></h3>
    </aside>
    <article id="right_author">
        <h3 id="author_title_desc">A propos de l'auteur :</h3>
        <?php echo $authorToDisplay->shortDescription ?>
    </article>
    
</a>