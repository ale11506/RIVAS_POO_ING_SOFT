<?php

class producto{
    public string $nombre;
    public int $precio;
    public bool $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
        
    }

    public function mostrarproducto(){
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
}

$producto = new producto('Tablet', 200, true);

$producto->mostrarproducto();

echo "<prev>";
var_dump($producto);
echo "<prev>";

$producto2 = new producto('Monitor Curvo', 300, true);

$producto2->mostrarproducto();

echo "<prev>";
var_dump($producto2);
echo "<prev>";

?>