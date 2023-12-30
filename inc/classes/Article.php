<?php
// Je crée un contructeur avec toute les propriétées qu'auras mon article
class Article
{
    public $title;
    public $titleHome;
    public  $coverImg;
    public $altImg;
    public $descriptionHome;
    public $introduction;
    public $detail;
    public $description;
    public $shadowColor;
    public $releaseDate;
    public $author;

    public function __construct(
        $title = null,
        $titleHome = null,
        $coverImg = null,
        $altImg = null,
        $descriptionHome = null,
        $introduction = null,
        $detail = null,
        $description = null,
        $shadowColor = null,
        $releaseDate = null,
        $author = null,
    )

    {
        $this->title = $title;
        $this->titleHome = $titleHome;
        $this->coverImg = $coverImg;
        $this->altImg = $altImg;
        $this->descriptionHome = $descriptionHome;
        $this->introduction = $introduction;
        $this->detail = $detail;
        $this->description = $description;
        $this->shadowColor = $shadowColor;
        $this->releaseDate = $releaseDate;
        $this->author = $author;
    }

    public function getDateFr() {
        // Je crée un nouvel objet de type DateTime
        // j'initialise l'objet DateTime avec la date de l'article,
        // ça permet de manipuler la date pour ensuite la convertir.
        // Ensuite je choisi le format de la date 

        $datetime = new DateTime($this->releaseDate);
        $formatedDate = $datetime->format("d/m/Y");
        return $formatedDate;
    }
}
