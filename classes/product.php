<?php

include_once __DIR__ . '/genre.php';

class Product{
  public $name;
  public $author;
  public $price;
  public $genres;
  public $published;
  public $image;

  public function __construct(
    String $name,
    String $author,
    Float $price,
    Genre $genre,
    Bool $published,
    String $image
    ) {
    $this->name = $name;
    $this->author = $author;
    $this->price = $price;
    $this->genre = $genre;
    $this->published = $published;
    $this->image = $image;
  }

}

?>