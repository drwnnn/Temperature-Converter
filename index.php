<?php

$result = "";
// check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // get the selected temperature from the form
    $choice = $_POST["choice"];
    // get the input temperature from the form
    $temperature = (float) $_POST["temperature"];

    // perform the conversion based on the selected temperature unit
    // converts celsius to fahrenheit & kelvin
    if ($choice == "1") {

        $fahrenheit = ($temperature * 9 / 5) + 32;
        $kelvin = $temperature + 273.15;

        $result = "Fahrenheit: " . round($fahrenheit, 2) ." °F";
        $result .= "<br>Kelvin: " . round($kelvin, 2) ." K";

    // converts fahrenheit to celsius & kelvin
    } elseif ($choice == "2") {

        $celsius = ($temperature - 32) * 5 / 9;
        $kelvin = $celsius + 273.15;

        $result = "Celsius: " . round($celsius, 2) ." °C";
        $result .= "<br>Kelvin: " . round($kelvin, 2) ." K";

    // converts kelvin to celsius & fahrenheit
    } elseif ($choice == "3") {

        $celsius = $temperature - 273.15;
        $fahrenheit = ($celsius * 9 / 5) + 32;

        $result = "Celsius: " . round($celsius, 2) ." °C";
        $result .= "<br>Fahrenheit: " . round($fahrenheit, 2) ." °F";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <!-- connect the css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- main container -->
    <div class="container">

        <h2>Temperature Converter in PHP</h2>

        <!-- form for temperature conversion -->
        <form method="POST">

            <!-- select what temperature to convert -->
            <label>Choose Temperature:</label>

            <select name="choice">
                <option value="1">Celsius (°C)</option>
                <option value="2">Fahrenheit (°F)</option>
                <option value="3">Kelvin (K)</option>
            </select>

            <!-- input the temperature to convert -->
            <input
                type="number"
                name="temperature"
                placeholder="Enter temperature"
                step="any"
            >

            <!-- button submit the form and start the conversion -->
            <button type="submit">Convert</button>

        </form>

        <!-- display the result -->
        <div class="result">
            <?php echo $result; ?>
        </div>

    </div>

</body>
</html>