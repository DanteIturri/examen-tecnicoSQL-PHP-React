<?php

class Coche
{
    private $marca; // Variable de instancia
    private $modelo; // Variable de instancia
    private static $contador = 0; // Variable estática

    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        self::$contador++; // Acceso a variable estática
    }

    public function obtenerInformacion()
    {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo;
    }

    public static function obtenerContador()
    {
        return self::$contador; // Acceso a variable estática
    }
}

// Uso de un método estático
echo Coche::obtenerContador() . "\n"; // Salida: 0 (antes de crear una instancia)
$coche1 = new Coche("Toyota", "Camry");
$coche2 = new Coche("Honda", "Civic");
echo Coche::obtenerContador() . "\n"; // Salida: 2 (después de crear dos instancias)

// Uso de un método no estático
echo $coche1->obtenerInformacion() . "\n"; // Salida: Marca: Toyota, Modelo: Camry
echo $coche2->obtenerInformacion() . "\n"; // Salida: Marca: Honda, Modelo: Civic

/* En este ejemplo, el método obtenerContador() es estático porque no necesita acceder a las variables de instancia $marca y $modelo. Por otro lado, el método obtenerInformacion() es no estático porque accede a las variables de instancia $marca y $modelo para obtener la información específica de cada instancia de la clase Coche. */