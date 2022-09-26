<?php

$array = ['VII'];
function separate($vl){
    //for($i=0; $i <= count($vl); $i++){
   //         echo "$vl[$i] <br>";
   //     }
 foreach($vl as $valor){
    echo $valor;
  }
}


separate($array);

function convert($vln){
  $dictionary = [
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000
  ];
  foreach($vln as $valor){
    $s =  key($vln);
    return $dictionary[$s];
  }
}

echo convert($array);