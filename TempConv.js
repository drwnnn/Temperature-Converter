//function to convert temperature based on user input
function convertTemperature() {

    // get the selected temperature unit
    const choice = document.getElementById("choice").value;
    // get the input temperature value
    const temperature = parseFloat(
        document.getElementById("temperature").value
    );

    let result = "";

    // perform the conversion based on the selected temperature unit
    // converts celsius to fahrenheit & kelvin
    if (choice === "1") {

        const fahrenheit = (temperature * 9 / 5) + 32;
        const kelvin = temperature + 273.15;

        result = "Fahrenheit: " + fahrenheit.toFixed(2)+ " °F" +
                 "<br>Kelvin: " + kelvin.toFixed(2)+ " K";

    // converts fahrenheit to celsius & kelvin
    } else if (choice === "2") {

        const celsius = (temperature - 32) * 5 / 9;
        const kelvin = celsius + 273.15;

        result = "Celsius: " + celsius.toFixed(2)+ " °C" +
                 "<br>Kelvin: " + kelvin.toFixed(2)+ " K";

    // converts kelvin to celsius & fahrenheit
    } else if (choice === "3") {

        const celsius = temperature - 273.15;
        const fahrenheit = (celsius * 9 / 5) + 32;

        result = "Celsius: " + celsius.toFixed(2)+ " °C" +
                 "<br>Fahrenheit: " + fahrenheit.toFixed(2)+ " °F";
    }

    // display the result in the HTML element with id "result"
    document.getElementById("result").innerHTML = result;
}