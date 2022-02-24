<?php

class Producto
{
    public $descripcion;
    private $precio;
    public $stock_inv;
    static $estado ="Activo";

    public function __construct($vrdescripcion, $vrprecio)
    {
        $this->descripcion = $vrdescripcion;
        $this->precio = $vrprecio;
        $this->stock_inv = 40;
        producto::$estado = "Activo";
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($vrprecio)
    {
        $this->precio = $vrprecio;
    }
    public function setEstado($vrestado){
        Producto::$estado = $vrestado;
    }


    public function getInfoproducto()
    {
        $arrayProducto = array(
            'Descripcion: ' => $this->descripcion,
            'Precio: ' => $this->precio,
            'Stock inventario: ' => $this->stock_inv,
            'Estado: ' => Producto::$estado,
        );
        return $arrayProducto;
    }
}

?>