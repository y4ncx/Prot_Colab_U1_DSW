<?php

namespace Src\application\usecases;

use Src\Domain\Entities\Mascota;
use Src\Domain\Repositories\MascotaRepository;

class ListarMascotas{
    private MascotaRepository $repositorio;

    public function __Construct(MascotaRepository $repositorio){
        $this->repositorio = $repositorio;
    }

    public function execute(Mascota $masccota): void{
        $this->repositorio->listar();
    }
}