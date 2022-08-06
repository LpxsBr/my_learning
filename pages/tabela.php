<?=include('comp/header.php')?>
<?=include('comp/style.php')?>

<h3><a href="/..">voltar</a></h3>
<br><hr><br>
<head>
  <style>
    table{
      border: 1px solid black;
      border-collapse: collapse;
      margin: 20px 0px;
    }
    table tr{
      border: 1px solid black;
    }
    table td{
      border: 1px solid black;
    }
    img{
      width: 20%;
      float: right;
    }
  </style>
</head>

<img src="Captura de tela 2022-07-15 165032.jpg" >
<?php

echo "<table><caption>alguma coisa</caption><thead><tr><th>A</th><th>B</th><th>C</th></tr></thead><tbody>";

$matriz = [
  ['1', '2', '3'],
  ['11', '12', '13'],
  ['21', '22', '23'],
];

foreach($matriz as $linhas){
  echo "<tr>";
  foreach($linhas as $linha){
    echo "<td>$linha</td>";
  }
  echo '</tr> <br>';
}
echo '</tbody></table><br>';
echo '<br>';
echo '<hr>';

?>


<!--formulario, post, que recebe um numero de linhas e colunas e que enumere crescentemente cada bloco-->

<form action="#" method="post">
  digite aqui o numero de linhas da tabela: <br>
  <input type="number" name="linhas">
  <br>
  digite aqui o numero de colunas da tabela: <br>
  <input type="number" name="colunas">
  <button>submit</button></button>
</form>

<div class="desafio">
  <?php
  $line = $_POST['linhas'];
  $column = $_POST['colunas'];

for($test = 1; $test <= count($line); $test++){
  echo $test.'and'.$line;
}
?>
  
</div>

