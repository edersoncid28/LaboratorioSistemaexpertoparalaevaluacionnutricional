<?php

// Recoger los datos enviados desde el formulario
$genero = $_POST["genero"];
$edad = $_POST["edad"];
$talla = $_POST["talla"];
$peso = $_POST["peso"];
$hemoglobina = $_POST["hemoglobina"];
$actividad = $_POST["actividad"];

// Crear una consulta para Prolog basada en la entrada
$query = "ejecutar_sistema('{$genero}', $edad, $talla, $peso, $hemoglobina, '{$actividad}').";

// Ejecutar la consulta de Prolog y capturar la salida
$output = null;
$path_to_swipl = "C:/Program Files/swipl/bin/swipl";
$command = "\"$path_to_swipl\" -s test.pl -g \"$query\" -t halt 2>&1";

exec($command, $output);


// Mostrar los resultados
foreach ($output as $line) {
    echo $line . "<br />";
}

?>
