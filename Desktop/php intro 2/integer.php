<?php
class person {
    const AVG_LIFE_SPAN = 79;
    
    protected $firstName;
    protected $lastName;
    protected $yearBorn;

    function __construct($tempFirst = "",$tempLast = "",$tempYear = "")
    {
        echo "person Constructor".PHP_EOL;
        $this->firstName = $tempName;
        $this->secondName = $tempLast;
        $this->yearBorn = $tempYear;
    }

    public function getFirstName(){

        return $this->firstName.PHP_EOL;

    }

    public function setFirstName($tempName)
    {

       $this->firstName = $tempName;
    }
    protected function getFullName()
    {

     echo "person->getFullName()".PHP_EOL;
     return $this->firstName." ".$this->lastName.PHP_EOL;

    }


}
class author extends person {
    public static $centurypopular = "19th";
    public $penName = "Mark Twain";

    public function getPenName(){
        return $this->penName.PHP.EOL;
    }
    public function getCompleteName()
    {
        return $this->firstName."".$this->lastName."a.k.a".$this->penName.PHP_EOL;
    }
    public static function getCenturyAuthorityWasPopular()
    {

    }
} 


echo Author::$centurypopular;
