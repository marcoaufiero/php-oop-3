<?php 

trait id{

    public $character;
    public $number;

    public function __construct(
        String $character,
        Int $number
        
        ) {
        $this->character = $character;
        $this->number = $number;
    }

    public function getId($character, $number){
        return "ID : $character $number";
    }

}




?>