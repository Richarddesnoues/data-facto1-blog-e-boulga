<section class=hotNews_block>
    <article class="card bigNews">
        <a href="index.php?page=article&id=1">
            <?php foreach ($dataBigArticle as $key => $bigArticle) : ?>
                <div class="title_bigNews title_news">
                    <img class="big" src=<?= " $bigArticle->coverImg " ?>, alt="image de l'article principal">
                    <div class="articleTeasing">
                        <h1><?= $bigArticle->titleHome ?></h1>
                        <p><?= $bigArticle->descriptionHome ?></p>
                    </div>
                </div>
            <?php endforeach ?>
            </a>
    </article>


<article class="card middle_news">
    <a href="index.php?page=article&id=<?= $key ?>">
        <div class="card1">
            <img class="small" src="/inc/assets/img/home_picture/montagne1.png" alt="image de l'article secondaire">
            <h2 class="small_h2">Lorem ipsum dolor sit amet.</h2>
        </div>
    </a>

    <a href="index.php?article&id=<?= $key ?>">
        <div class="card1">
            <img class="small" src="/inc/assets/img/home_picture/montagne1.png" alt="image de l'article secondaire">
            <h2 class="small_h2">Lorem ipsum dolor sit amet.</h2>
        </div>
    </a>
</article>
</section>

<span class="separation_bar"><img class="separation" src="/inc/assets/img/separation.svg" alt="Barre de séparation"></span>

<section class="article_list">
    <?php foreach ($dataArticleList as $key => $article) : ?>
        <a href="index.php?page=article&id=<?= $key ?>">
            <article class="article_block">
                <div class="card_container">
                    <div class="card2">
                        <img class="medium" src="/inc/assets/img/home_picture/montagne1.png" alt="image de l'article secondaire">
                    </div>
                </div>
                <div class="little_article">
                    <h3 class="article_h3"><?= $article->titleHome ?></h3>
                    <p>
                        <?= $article->descriptionHome ?>
                    </p>
                </div>
            </article>
        </a>
    <?php endforeach; ?>
</section>