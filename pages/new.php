<?php
/*
int INDICE = 13, SOMA = 0, K = 0;

enquanto K < INDICE faça
{
K = K + 1;
SOMA = SOMA + K;
}

imprimir(SOMA);
*/
$indice = 13;
$soma = 0;
$k = 0;
while($k < $indice){
  $k = $k + 1;
  $soma = $soma + $k;
}

echo $soma;

echo '<hr>';


//echo ehDaSequencia($valor);
?>

<form method="post" action="#">
  <input type="number" name="value">
  <button>>>>>>Enviar<<<<</button>
</form>

<?php

function fibonacci($value){
  $start = 0;
  
  $during = 1;
  
  $after = 1;
  
  while(1){
    
    $start = $during;
    
    $during = $after;
    
    $after = $during + $start;
    
    //echo $during.' dur <br>';
    
    //echo $after.' aft <br>';
    
    if($value == $during){
      return 'true';
      break;
    }

    if($value <> $during){
      return 'false';
    }
    
  }
  
}

echo fibonacci($_POST['value']);
echo "<br>";

 /* 
$array=[];
for($i=0;$i < 2;$i++){
  $array[$i] = fibonacci($_POST['value']);
}
print_r($array);

foreach($array as $valor){
  echo $valor[];
}
*/