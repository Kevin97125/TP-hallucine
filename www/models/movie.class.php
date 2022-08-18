<?php
    class Movie{
        private int $_id;
        private string $_title;
        private string $_imageUrl;
        private int $_runtime;
        private string $_description;
        private DateTime $_releaseDate;
        private DateTime $_addedDate;

        public function __construct($id, $title, $imageUrl, $runtime, $description, $releaseDate, $addedDate) {
            $this->id = $id;
            $this->title = $title;
            $this->imageUrl = $imageUrl;
            $this->runtime = $runtime;
            $this->description = $description;
            $this->releaseDate = $releaseDate;
            $this->addedDate = $addedDate;

    }

    public function getId(){return $this->id};
    public function getTitle(){return $this->title};
    public function getImageUrl(){return $this->imageUrl;}
    public function getDescription(){return $this->descriptio};
    public function getReleasesDate(){return $this->releasesDate};
    public function getAddedDate(){return $this->addedDate};
?>