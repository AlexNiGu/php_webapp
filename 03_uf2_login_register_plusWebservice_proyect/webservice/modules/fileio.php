<?php

$fichero = 'testxml.xml';

// Abre el fichero para obtener el contenido existente
$actual = file_get_contents($fichero);
echo $actual;

// Añade una nueva persona al fichero
$actual .= 'textxml.php';


// Escribe el contenido al fichero
file_put_contents($fichero, $actual);

?>