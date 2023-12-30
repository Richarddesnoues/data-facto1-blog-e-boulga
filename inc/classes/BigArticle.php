<?php

class BigArticle
{
    public $title;
    public $titleHome;
    public  $coverImg;
    public $altImg;
    public $descriptionHome;

    public function __construct(
        $title = null,
        $titleHome = null,
        $coverImg = null,
        $altImg = null,
        $descriptionHome = null,
    )
    {
        $this->title = $title;
        $this->titleHome = $titleHome;
        $this->coverImg = $coverImg;
        $this->altImg = $altImg;
        $this->descriptionHome = $descriptionHome;
    }
}    