<?php

include_once __DIR__ . '/product.php';

class Book extends Product {
  public $pages;
  public $cover;

  public function __construct(
    String $name,
    String $author,
    Float $price,
    Genre $genre,
    Bool $published,
    String $image,

    Int $pages,
    String $cover
    ) {
    $this->pages = $pages;
    $this->cover = $cover;
    parent::__construct($name,$author,$price,$genre,$published,$image);
  }
}

?>