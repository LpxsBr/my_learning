
<html>
  <head>
    <?=include('comp/style.php')?>
  </head>
  <body>
  <?=include('comp/header.php')?>
  <main class="content">
    $array = [1 , 2, [3, 4, 5], 6 [7,[8, 9,]], 10]
    <br>
    <?php
    $array = [1 , 2, [3, 4, 5], 6, [7,[8, 9,]], 10];
    function exibir($array, $nivel='>'){
      foreach($array as $valor){
        if(is_array($valor)){
          exibir($valor, $nivel.$nivel[0]);
        }else{
          echo "$nivel $valor <br>";
        }
      }
    }
    exibir($array);
    ?>
  </main>
</body>
<?=include('comp/footer.php')?>
</html>
