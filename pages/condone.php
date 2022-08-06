<?=include('comp/header.php');include('comp/style.php')?>

<h3><a href="/..">voltar</a></h3>
<br><hr><br>
<?php
echo "<h1>TERNARIO</h1>";
echo "um teste com os ternarios <br>";

echo "a ideia é testar se minha idade sou maior de idade ou não <br> <hr> <br>";

$idade = 18;

$resultado = $idade >= 18 ? "por ter $idade, é de maior" : "por ter $idade, é de menor";

echo $resultado;


?>


  