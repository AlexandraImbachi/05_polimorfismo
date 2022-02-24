<?php
require_once("01_claseProducto.php");

$objIndumuebles = new Producto("Mesa Rustica", 3500000);

echo "Precio del producto: " . number_format($objIndumuebles->getPrecio()) . "<br>";
echo "Estado: " . producto::$estado . "<br>";
$objIndumuebles->setEstado("Inactivo");
echo "Estado: " . producto::$estado;
$objIndumuebles->getInfoproducto();


print_r('<pre>');
print_r($objIndumuebles);
print_r('</pre>');

?>