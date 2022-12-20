<?php 

include_once __DIR__ . '/../traits/id.php';

class Employee{
    
    use id;

    public $name;
    public $lastName;
    public $age;
    public $positiveFeebacks;

    public function __construct(
        String $name,
        String $lastName,
        Float $age,
        Int $positiveFeebacks
        
        ) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->positiveFeebacks = $positiveFeebacks;
      }

}


?>