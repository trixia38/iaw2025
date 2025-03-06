<form method="POST">
​<input type="number" name="edad" >
​<input type="submit" value="Enviar">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
​$edad = $_POST["edad"];
​echo $edad >= 18 ? "Eres mayor de edad" : "Eres menor de edad";
}
?>