<?php

require 'array.php';


function helloWorld(){
echo " hello world";

}


helloWorld();


//fonction avec retour
function myHelloWorld(){
    // envoit une valeur et s arrete 
    return "hello world";
}

echo myHelloWorld();


function upperArray (array $tab): string
{
    $txt ="";
   foreach($tab as $value){
    $txt .= ucwords($value)."<br>";
   }
   return $txt;
}


 echo upperArray([]);
 echo '<br>';
 echo upperArray($classe);
 echo upperArray($semaineFr);
 