<?php

include_once __DIR__ . '/classes/genre.php';
include_once __DIR__ . '/classes/book.php';
include_once __DIR__ . '/classes/audiobook.php';
include_once __DIR__ . '/classes/cd.php';
include_once __DIR__ . '/classes/movie.php';
include_once __DIR__ . '/classes/employee.php';



$genres = [
  'giallo' => new Genre('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Genre('horror', 'icon-font-awesome-horror'),
  'noire' => new Genre('noire', 'icon-font-awesome-noire'),
  'rap' => new Genre('rap', 'icon-font-awesome-mic')
];

$products = [
    new Book( 'La scelta di Natan', 'Antonio Puccio', 23.40, $genres['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile' ),
    new audioBook('La scelta di Natan', 'Antonio Puccio', 23.40, $genres['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
    new Movie('Pulp Fiction', 'Quentin Tarantino', 14.99, $genres['noire'], true, 'https://immagine-film.com', 125, 'Blue Ray'),
    new CD('Revival', 'Eminem', 13.99, $genres['rap'], true, 'https://immagine-revival-album.com', 77, '15 December 2017')
];

$employees = [
    new Employee('Tom', 'Rogers', 26, 9,'E', 710),
    new Employee('Sandra', 'White', 32, 5,'E', 401),
    new Employee('Carl', 'Banks', 19, 3,'E', 184),
];



echo '<pre>';
var_dump( $products);
echo '</pre>';


echo '<pre>';
var_dump( $employees);
echo '</pre>';

echo $employees[0]->getId() . "<br>";


foreach ($employees as $employee){
    try{
        if($employee->positiveFeebacks > 6){
        echo "$employee->name è l'impiegato del mese" . "<br>" ;
        }else{
            throw new Exception("$employee->name non è l'impiegato del mese" . "<br>");
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}




?>