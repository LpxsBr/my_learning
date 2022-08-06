<?= $cabecalho = include 'comp/header.php'?>
<?=$estilo = include('comp/style.php')?>


  <main class="content">
    <h3>
      <a href="/..">voltar</a>
    </h3>
    <hr>
    <br>
    <h1>Função anonima</h1>
    <hr>
    <br>
    <p>posso usar uma função anonima dentro de uma variavel:</p>
    $meunome = function ($nome){
      return "meu nome é <h style='font-weight: bold'>$nome</h>";
    };
    
    echo $meunome('anselmo');
    <br>
    RESULTADO:
    <br>
    <?php
      $meunome = function ($nome){
        return "meu nome é <h style='font-weight: bold'>$nome</h>";
      };
      
      echo $meunome('anselmo');
    ?>
  </main>
</body>
<?=$rodape = include('comp/footer.php')?>
