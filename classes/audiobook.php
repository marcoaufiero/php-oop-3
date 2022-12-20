<?php

include_once __DIR__ . '/product.php';

class audioBook extends Product{
  public $lenght;
  public $platform;
  public $link;

  public function __construct(
    String $name,
    String $author,
    Float $price,
    Genre $genre,
    Bool $published,
    String $image,

    Int $lenght,
    String $platform,
    String $link
    ) {
    $this->lenght = $lenght;
    $this->platform = $platform;
    $this->link = $link;
    parent::__construct($name,$author,$price,$genre,$published,$image);
  }


}

?>