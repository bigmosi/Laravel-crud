<?php

$authors = array(
    "quarkly" => "Charles Dickens",
    "brilliant" => "Jane Austin", 
    "poetic" => "William Shakespear"   
);
foreach($authors as $key =>$Name){

    echo $Name."(".$key.")\n";
}