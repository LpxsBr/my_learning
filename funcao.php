<?=$head = include 'comp/t.php'; echo $head?>
<?=include('comp/style.php')?>

<h3><a href="/..">voltar</a></h3>
<br><hr><br>
<h1>Função anonima</h1>
<hr><br>

<p>posso usar uma função anonima dentro de uma variavel:</p>
$meunome = function ($nome){
  return "meu nome é <h style='font-weight: bold'>$nome</h>";
};

echo $meunome('anselmo');
<br>
<br>
RESULTADO:
<br>
<?php

$meunome = function ($nome){
  return "meu nome é <h style='font-weight: bold'>$nome</h>";
};

echo $meunome('anselmo');
