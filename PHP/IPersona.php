<?php
interface IPersona
{
    public function obtenerNombre(): string;
    public function obtenerEdad(): int;
    public function establecerEdad(int $nuevaEdad): void;
    public function obtenerDireccion(): string;
    public function establecerDireccion(string $nuevaDireccion): void;
}
class Persona implements IPersona
{
    private $nombre;
    private $edad;
    private $direccion;

    public function __construct(string $nombre, int $edad, string $direccion)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    public function obtenerNombre(): string
    {
        return $this->nombre;
    }

    public function obtenerEdad(): int
    {
        return $this->edad;
    }

    public function establecerEdad(int $nuevaEdad): void
    {
        $this->edad = $nuevaEdad;
    }

    public function obtenerDireccion(): string
    {
        return $this->direccion;
    }

    public function establecerDireccion(string $nuevaDireccion): void
    {
        $this->direccion = $nuevaDireccion;
    }
}
