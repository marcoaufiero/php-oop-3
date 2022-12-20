<?php 

include_once __DIR__ . '/product.php';

class Movie extends Product{
    public $duration;
    public $type;

    public function __construct(
        String $name,
        String $author,
        Float $price,
        Genre $genre,
        Bool $published,
        String $image,
    
        Int $duration,
        String $type
        
        ) {
        $this->duration = $duration;
        $this->type = $type;
        parent::__construct($name,$author,$price,$genre,$published,$image);
      }


}


?>