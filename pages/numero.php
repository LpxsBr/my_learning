<?=include('comp/header.php')?>
<?=include('comp/style.php')?>

<h3>
  <a href="/..">voltar</a>
</h3>
<br>
<hr>
<br><form action='#' method="post">
  <input type="tel" name="numero">
  <button> aqui </button>
</form>

<?php

$nome = "anselmo";
$numero = $_POST["numero"];
$msg = "oi meu nome é $nome, vim através da petselect marcar uma consulta para meu pet";
cadastrarNumero($numero);
function cadastrarNumero($num){
  echo "$num cadastrado";
  return $num;
}


$one = "https://wa.me/55$num?$msg";
$two = "https://api.whatsapp.com/send/?phone=55$numero&text=$msg&type=phone_number&app_absent=1";
$three = "https://web.whatsapp.com/send?phone=55$numero&text=$msg&source=&data=";

?>

<center>
  <a href="<?=$two?>" target="_blank">Whats</a>
</center>