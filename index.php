<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios</title>

    <!-- style -->
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            margin: 0% auto;
            display: grid;
            grid-template-rows: 40px 1fr 100px;
            grid-template-columns: 1fr;
            grid-template-areas: 
            "cabecalho"
            "content"
            "rodape"
            ;
        }
        .cabecalho{
            grid-area: "cabecalho";
            background-color: blue;
        }
        .content{
            grid-area: "content";
            background-color: rgb(248, 248, 248);
            height: calc(100vh-(140px));
            margin: 0% auto;
        }
        .rodape{
            grid-area: "rodape";
            background-color: rgb(252, 0, 0);
            bottom: 0%;
        }
        .cabecalho a{
            color: white;
            text-decoration: none;
        }
        div.menu{
            border-color: rgb(0, 0, 0);
            border-style: dashed;
            width: 30em;
            height: 100%;
            text-align: center;
        }
      li{
        list-style: none;
      }
    </style>
</head>
<body>
    <header class="cabecalho">
      <div class="navbar">
        <a href="#">Inicio</a>
        <a href="#">Serviço</a>
        <a href="#">Quem somos</a>
      </div>
    </header>
    <main class="content">
        <div class="menu">
          <ul>
             <li>
              <h3>
                <a href="apoio.php">apoio
                </a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/tabela.php">Tabela
                </a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/condone.php">Ternario e Switch</a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/learn-for.php">Uns testes</a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/conversor-de-unidade.php">Conversor de unidade</a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/mesesarray.php">Desafio Meses Array</a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/funcao.php">Funções</a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/recursividade.php">Recursividade</a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/numero.php">Whatsapp</a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/busca-recursiva.php">Busca Recursiva</a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/recus-soma.php">Soma Recursiva</a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/mapfilter.php">Map e Filter</a>
              </h3>
            </li>
            <li>
              <h3>
                <a href="pages/roman-to-integer.php">Roman to integer - leetcode</a>
              </h3>
            </li>
          </ul>  
        </div>
    </main>
    <footer class="rodape">
      
    </footer>
</body>
</html>

