<?php
class person {
    const AVG_LIFE_SPAN = 79;
    
    public $firstName;
    public $lastName;
    public $yearBorn;

    function__construct($tempFirst = "",$tempLast = "",$tempYear = "")
    {
        echo "person Constructor".PHP_EOL;
        $this->$tempName;
        $this->$tempLast;
        $this->$tempYear;
    }

    public function getFirstName(){

        return $this->firstName.PHP_EOL;

    }

    public function setFirstName($tempName){

       $this->firstName = $tempName;
    }
    public function getFullName()
    {
        echo "simon";
     echo "person->getFullName()".PHP_EOL;
     return $this->firstName." ".$this->lastName.PHP_EOL;

    }


}

$myObject = new person();
$myObject->setFirstName("Sam");
echo $myObject->getFirstName;
