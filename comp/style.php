<?php

function nstyle(){
  return
    '<style>
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
    </style>';
}
echo nstyle();

?>