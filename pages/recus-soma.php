

<html>
  
  <head>
    
    <?=include('comp/style.php')?>

  </head>
  
  <body>
    
    <?=include('comp/header.php')?>

    <main class = "content">
      
      <h3>
        <a href="/..">voltar</a>
      </h3>
      
      <div class="menu">
      <?php

function soma(...$num){
  if($num == soma($num)){
    $num = $num;
  }else{
    $num += soma(...$num);
  }
  return $num;
}

echo soma(1, 2, 3);
  
      ?>
      </div>

    </main>
    
    <?=include('comp/footer.php')?>

  </body>
  
</html>

