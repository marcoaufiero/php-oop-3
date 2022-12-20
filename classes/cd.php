<?php 

include_once __DIR__ . '/product.php';

class CD extends Product{
    public $duration;
    public $release;

    public function __construct(
        String $name,
        String $author,
        Float $price,
        Genre $genre,
        Bool $published,
        String $image,
    
        Int $duration,
        String $release
    
        ) {
        $this->duration = $duration;
        $this->release = $release;
        parent::__construct($name,$author,$price,$genre,$published,$image);
      }


}





?>