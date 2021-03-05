<?php

$authors = array(
    "Charles Dickens",
    "Jane Austin", 
    "William Shakespear",
    "Mark Twain",
    
);
$authorsAssociative = array(

    "poetic" => "William Shakespeare",
    "brillian" => "Jane Austin",
    "quarky" => "Charles Dickens" 
);
sort($authorsAssociative);

print_r($authorsAssociative);