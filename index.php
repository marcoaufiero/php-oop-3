<?php

include_once __DIR__ . '/classes/genre.php';
include_once __DIR__ . '/classes/book.php';
include_once __DIR__ . '/classes/audiobook.php';


$genres = [
  'giallo' => new Genre('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Genre('horror', 'icon-font-awesome-horror')
];
var_dump( $genres );

$products = [
  new Book( 'La scelta di Natan', 'Antonio Puccio', 23.40, $genres['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile' ),
  new audioBook('La scelta di Natan', 'Antonio Puccio', 23.40, $genres['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
];

var_dump( $products );

foreach( $products as $product ){
  echo get_class($product);
  echo "<br>";
}
?>