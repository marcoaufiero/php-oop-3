<?php

include_once __DIR__ . '/product.php';

class audioBook extends Product{
  public $duration;
  public $platform;

  public function __construct(
    String $name,
    String $author,
    Float $price,
    Genre $genre,
    Bool $published,
    String $image,

    Int $duration,
    String $platform

    ) {
    $this->duration = $duration;
    $this->platform = $platform;
    parent::__construct($name,$author,$price,$genre,$published,$image);
  }
}

?>