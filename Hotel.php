<?php

class Hotel
{
    private $nombre;
    private $ubicacion;
    private $numeroDeEstrellas;
    private $capacidad;
    private $tipoDeHabitacion;

    public function __construct($nombre, $ubicacion, $numeroDeEstrellas, $capacidad, $tipoDeHabitacion)
    {
        $this->nombre = $nombre;
        $this->ubicacion = $ubicacion;
        $this->numeroDeEstrellas = $numeroDeEstrellas;
        $this->capacidad = $capacidad;
        $this->tipoDeHabitacion = $tipoDeHabitacion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    public function getNumeroDeEstrellas()
    {
        return $this->numeroDeEstrellas;
    }

    public function getCapacidad()
    {
        return $this->capacidad;
    }

    public function getTipoDeHabitacion()
    {
        return $this->tipoDeHabitacion;
    }
}