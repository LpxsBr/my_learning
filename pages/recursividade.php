<?=include('comp/header.php')?>
<?=include('comp/style.php')?>
<body>
    <header class="cabecalho">
      <div class="navbar">
        <a href="#">Inicio</a>
        <a href="#">Serviço</a>
        <a href="#">Quem somos</a>
      </div>
    </header>
      
    <main class="content">
      <h3>
        <a href="/..">voltar</a>
      </h3>
      <div class="menu">
        <form method="post" action="#">
          <input type="number" name="number" value=1>
          <button>Calcular</Button>
        </form>
      
<?php
$number = intval($_POST["number"]);


function fatorial(int $number): float{
  if($number <= 1){
    $number = $number;
  }else{
    $number *=fatorial($number -1);
  }
  return $number;
}

echo "<br> fatorial($number) = ".fatorial($number);






//v = x * (x-y)

//v1 = x * x
//v2 = (x - y) y-> 1














?>
      </div>
    </main>
  
    <footer class="rodape">
      h
    </footer>
</body>
</html>

