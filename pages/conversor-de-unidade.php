<?= include('comp/header.php') ?>
<?= include('comp/style.php') ?>

<h3><a href="/..">voltar</a></h3>
<br>
<hr><br>
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
                    break;

                case "MeterToKm":
                    $answer = $value / 1000;
                    $theanswer = "$value Metros = $answer Quilometros";
                    break;

                case "KmToMile":
                    $answer = $value * 0.621371;
                    $theanswer = "$value Quilometros = $answer Milhas";
                    break;

                case "MileToKm":
                    $answer = $value / 0.621371;
                    $theanswer = "$value Milhas = $answer Quilometros";
                    break;

                case "CelsiusToFahrenheit":
                    $answer = (($value * 1.8) + 32);
                    $theanswer = "{$value}° Celsius = {$answer}° Fahrenheit";
                    break;

                case "FahrenheitToCelsius":
                    $answer = (($value - 32) / 1.8);
                    $theanswer = "{$value}° Fahrenheit = {$answer}° Celsius";
                    break;

                default:
                    $answer = "algo está errado";
            }
            return $theanswer;
        } else {
            return "sem valores inseridos";
        }
    }
    ?>
</div>

<?= include('comp/footer.php') ?>