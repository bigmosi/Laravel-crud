<?php
class person {
    const AVG_LIFE_SPAN = 79;
    
    public $firstName = "Samuel Langhrne";
    public $lastName = "Clemens";
    public $yearBorn = 1899;

}

$myObject = new person();

echo $myObject::AVG_LIFE_SPAN;
