<?=include('comp/header.php')?>
<?=include('comp/style.php')?>

<h3>
  <a href="/..">voltar</a>
</h3>
<br>
<hr>
<br>
<?php
$nome = "anselmo";
$numero = "85985336701";
$msg = "oi meu nome é $nome, vim através da petselect marcar uma consulta para meu pet";


$one = "https://wa.me/55$numero?$msg";
$two = "https://api.whatsapp.com/send/?phone=55$numero&text=$msg&type=phone_number&app_absent=1";
$three = "https://web.whatsapp.com/send?phone=55$numero&text=$msg&source=&data=";

?>

<center>
  <a href="<?=$two?>" target="_blank">Whats</a>
</center>