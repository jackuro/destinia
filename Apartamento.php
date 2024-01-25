<?php

class Apartamento
{
    private $nombre;
    private $ubicacion;
    private $numeroDeApartamentosDisponibles;
    private $capacidad;


    public function __construct($nombre, $ubicacion, $numeroDeApartamentosDisponibles, $capacidad)
    {
        $this->nombre = $nombre;
        $this->ubicacion = $ubicacion;
        $this->numeroDeApartamentosDisponibles = $numeroDeApartamentosDisponibles;
        $this->capacidad = $capacidad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    public function getNumeroDeApartamentosDisponibles()
    {
        return $this->numeroDeApartamentosDisponibles;
    }

    public function getCapacidad()
    {
        return $this->capacidad;
    }
}