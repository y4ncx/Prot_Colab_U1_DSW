<?php

namespace Src\Domain\Entities;

class Mascota{

    private int $id;
    private string $nombre;
    private string $genero;
    private float $peso;
    private float $tamano;
    private string $color;
    private string $raza;
    private string $especie;
    private string $fechanacimiento;
    private string $propietario;
    private string $domesticoOsalvaje;
    private string $tieneVacunas;
    private string $veterinario;

    //Constructor Vacio
    public function __Construct() {}

}