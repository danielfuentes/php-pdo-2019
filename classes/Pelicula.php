<?php

class Pelicula
{
    private $id; 
    private $created_at;
    private $updated_at;
    private $title;
    private $rating;
    private $awards;
    private $release_date;
    private $length;
    private $genre_id;

    public function __construct($title, $awards, $length, $rating, $release_date, $genre_id, $id = null, $created_at = null, $updated_at = null)
    {
        $this->id = $id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->title = $title;
        $this->rating = $rating;
        $this->awards = $awards;
        $this->release_date = $release_date;
        $this->length = $length;
        $this->genre_id = $genre_id;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($nuevoId)
    {
        $this->Id = $nuevoId;
    }

    public function getCreatedAt()
    {
        return $this->Created_at;
    }
    public function setCreatedAt($created_at)
    {
        $this->setCreatedAt = $created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    public function setUpdateAt($updated_at)
    {
        $this->UpdateAt = $updated_at;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->Rating = $rating;
    }

    public function getAwards()
    {
        return $this->awards;
    }

    public function setAwards($awards)
    {
        $this->Awards = $awards;
    }

    public function getReleaseDate()
    {
        return $this->release_date;
    }

    public function setReleaseDate($release_date)
    {
        $this->Release_date = $release_date;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setlength($length)
    {
        $this->Length = $length;
    }

    public function getGenre_id()
    {
        return $this->genre_id;
    }

    public function setGenre_id($genre_id){
        $this->Genre_id = $genre_id;
    }
}
