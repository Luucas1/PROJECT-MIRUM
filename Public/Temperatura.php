<?php

if(empty($_POST)) {

?>

<form  method="POST">

Valor em <strong>Celsius</strong>: <input type="text" value="" name="Celsius" /> <strong>ºC</strong><br><br>

<input type="submit" value="Converter em Fahrenheit!" />

</form>

<?php

} else if (isset($_POST)) { 

?>

<form  method="POST">

Valor em <strong>Celsius</strong>: <input type="text" value="" name="Celsius" /> <strong>ºC</strong><br><br>

<input type="submit" value="Converter em Fahrenheit!" />

</form>

<?php

$C = $_POST['Celsius'];

$F = (9*$C + 160)/5; 

echo "Valor em <strong>Celsius</strong>: " . $C . " ºC<br>Valor em <strong>Fahrenheit</strong>: " . $F . " ºF";

}

?>

