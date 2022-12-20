<?php 

trait id{

    public $character;
    public $number;

    public function getId(){
        return "ID : $this->character$this->number";
    }

}




?>