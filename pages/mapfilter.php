<html>

<head>
  <?= include('comp/style.php') ?>
</head>

<body>
  <?= include('comp/header.php') ?>
  <main class="content">
    <h3>
      <a href="/..">voltar</a>
    </h3>
    <form method="post" action="#">
      <input type="text" name="searchInput">
      <button>Pesquisar</button>
    </form>

    <?php

    $dados = [
      'anselmo',
      'lucas',
      'eduardo',
      'bianca',
      'wanessa',
      'yan'
    ];
    function resultadoBusca($dados)
    {
      return $dados == $_POST["searchInput"];
    }

    $resultado = array_filter($dados, "resultadoBusca");
    //print_r($resultado);
    foreach ($resultado as $termos) {
      echo $termos . "<br>";
    }
    ?>
  </main>
</body>
<?= include('comp/footer.php') ?>

</html>