<?=include('comp/header.php')?>
<?=include('comp/style.php')?>

<h3>
  <a href="/..">voltar</a>
</h3>
<br><hr><br>
<h1>Desafio dos meses no Array</h1>
<hr><br>

<p>
  a ideia é fazer com que os indices
  sigam os meses, de 1 a 12
  
  a solução foi pegar o primeiro indice (0), que tem 
  janeiro, e deslocar para o indice 1
</p>
<br>
<span>
  1=>'janeiro',
</span>
<br>
<br>
<?php

$meses = array(
  1=>'janeiro',
  'fevereiro',
  'março',
  'abril',
  'maio',
  'junho',
  'julho',
  'agosto',
  'setembro',
  'outubro',
  'novembro',
  'dezembro',
);

print_r($meses);

?>

<h1>Desafio dos indices aleatorios</h1>
<hr><br>

<p>
  a ideia é fazer com que os indices mudem a cada interação
  aplicar no case do dado, 1 ate 6, sendo exibido aleatorio

</p>

<span>
  resposta: usar array_rand()
</span>

<br>
<br>
<center>
  <?php
  echo "<h3>Jogando um dado</h3>";
  $dado = [1, 2, 3, 4, 5, 6];
  //print_r($dado);
  $i = array_rand($dado);
  echo "<h1>$dado[$i]</h1>"; 
  ?>
  
    <form action="#" method="post">
      <button>Jogar o dado</button>
    </form>
</center>
