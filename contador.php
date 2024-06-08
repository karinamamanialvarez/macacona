<?php
// Nombre del archivo que almacenará el contador de visitas
$archivo = 'contador.txt';

// Leer el contenido del archivo
if (file_exists($archivo)) {
    $contador = file_get_contents($archivo);
    $contador = intval($contador);
} else {
    $contador = 0;
}

// Incrementar el contador
$contador++;

// Escribir el nuevo valor del contador en el archivo
file_put_contents($archivo, $contador);

// Mostrar el contador
echo $contador;
?>
