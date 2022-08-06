<?=include('comp/header.php')?>
<?=include('comp/style.php')?>

<h3><a href="/..">voltar</a></h3>
<br><hr><br>
<?php

//piramide em php

for($n = 1; $n<=5; $n++){
  for($i=1; $i <= $n; $i++){
    echo '#';
  }
  echo '<br>';
}

echo '<hr>';

$numero = [
  0,
  1,
  2,
  3,
  4,
  5,
  6,
  7,
  8,
  9,
  10
];

foreach($numero as $teste){
  if($teste%2==0){
    echo $teste.' é par<br>';
  }else{
    echo $teste.' é impar <br>';
  }
}


echo '<hr>';

echo "desafio impessao";
echo '<br>';
// IMPRIMA APENAS DO VALORES QUE FOREM PAR NO ARRAY
$array = [
  'AAA',
  'BBB',
  'CCC',
  'DDD',
  'EEE',
  'FFF',
];


for($indice=0; $indice<=count($array); $indice++){
  if($indice % 2 != 0) continue;
      echo $array[$indice].'<br>';
}
echo '<br>';

foreach($array as $indice=>$valor){
  if($indice % 2 === 0){
    echo $valor.'<br>';
  }
}
echo '<br>';
foreach($array as $indice=>$valor){
  if($indice % 2 !== 0) continue;
  echo $valor.'<br>';
}

echo '<br>';

$count = 0;
do{
  echo 'oi <br>';
  $count++;
}while($count < 2);

echo '<br>';
echo '<hr>';
echo '<br>';



echo '<br>';

$array = ['victor', 'anselmo', 'alysson'];
echo $array[0];

?>

