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

        <?php
        echo "<h1>TERNARIO</h1>";
        echo "um teste com os ternarios <br>";

        echo "a ideia é testar se minha idade sou maior de idade ou não <br> <hr> <br>";

        $idade = 18;

        $resultado = $idade >= 18 ? "por ter $idade, é de maior" : "por ter $idade, é de menor";

        echo $resultado;


        ?>
    </main>
</body>
<?= include('comp/footer.php') ?>

</html>