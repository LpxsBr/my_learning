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
        <div>
            <form action="#" method="post">
                <input type="number" name="value">
                <select name="conversao" id="conversao">
                    <option value="KmToMeter">km - metro</option>
                    <option value="MeterToKm">metro - km</option>
                    <option value="MileToKm">milha - km</option>
                    <option value="KmToMile">km - milha</option>
                    <option value="CelsiusToFahrenheit">Celsius - Fahrenheit</option>
                    <option value="FahrenheitToCelsius">Fahrenheit - Celsius</option>
                </select>
                <button>Calcular</button>
            </form>
            <h3>Resultado:</h3>

        </div>
        <?php

        $vl = intval($_POST["value"]);
        $ty = $_POST["conversao"];

        echo $setTest = isset($vl) ? conversor($vl, $ty) : "Sem valores aqui";

        function conversor($value, $type)
        {
            if (isset($value)) {
                switch ($type) {
                    case "KmToMeter":
                        $answer = $value * 1000;
                        $theanswer = "$value Quilometros = $answer Metros";
                        $distNeg = $value < 0 ? 'é estranho ter uma distancia negativa' : ':)';
                        break;

                    case "MeterToKm":
                        $answer = $value / 1000;
                        $theanswer = "$value Metros = $answer Quilometros";
                        $distNeg = $value < 0 ? 'é estranho ter uma distancia negativa' : ':)';
                        break;

                    case "KmToMile":
                        $answer = $value * 0.621371;
                        $theanswer = "$value Quilometros = $answer Milhas";
                        $distNeg = $value < 0 ? 'é estranho ter uma distancia negativa' : ':)';
                        break;

                    case "MileToKm":
                        $answer = $value / 0.621371;
                        $theanswer = "$value Milhas = $answer Quilometros";
                        $distNeg = $value < 0 ? 'é estranho ter uma distancia negativa' : ':)';
                        break;

                    case "CelsiusToFahrenheit":
                        $answer = (($value * 1.8) + 32);
                        $theanswer = "{$value}° Celsius = {$answer}° Fahrenheit";
                        $distNeg = $value < 0 ? 'é estranho ter uma distancia negativa' : ':)';
                        break;

                    case "FahrenheitToCelsius":
                        $answer = (($value - 32) / 1.8);
                        $theanswer = "{$value}° Fahrenheit = {$answer}° Celsius";
                        $distNeg = $value < 0 ? 'é estranho ter uma distancia negativa' : ':)';
                        break;

                    default:
                        $answer = "algo está errado";
                }
                return $theanswer . '<br>' . $distNeg;
            } else {
                return "sem valores inseridos";
            }
        }
        ?>
    </main>
</body>
<?= include('comp/footer.php') ?>

</html>