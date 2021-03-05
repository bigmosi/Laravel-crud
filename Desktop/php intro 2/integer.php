<?php

$authors = array(
    "Charles Dickens",
    "Jane Austin", 
    "William Shakespear",
    "Mark Twain",
    
);
unset($authors[2],$authors[0]);
print_r($authors);