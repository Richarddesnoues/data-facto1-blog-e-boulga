<?php 

class Author 
{
    public $authorFirstName;
    public $authorLastName;
    public $shortDescription;

    public $fullDescription;
    public $linkedin;
    public $gitHub;
    public $website;
    public $img;


    public function __construct(
        $authorFirstName = null,
        $authorLastName = null,
        $shortDescription = null,
        $fullDescription = null,
        $linkedin = null,
        $github = null,
        $website = null,
        $img = null,
    )
    {
        $this->authorFirstName = $authorFirstName;
        $this->authorLastName = $authorLastName;
        $this->shortDescription = $shortDescription;
        $this->fullDescription = $fullDescription;
        $this->linkedin = $linkedin;
        $this->gitHub = $github;
        $this->website = $website;
        $this->img = $img;
    }
}