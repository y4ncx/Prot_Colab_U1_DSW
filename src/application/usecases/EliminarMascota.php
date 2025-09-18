<?php

namespace Src\application\usecases;

use Src\Domain\Entities\Mascota;
use Src\Domain\Repositories\MascotaRepository;

class EliminarMascota{
    private MascotaRepository $repositorio;

    public function __Construct(MascotaRepository $repositorio){
        $this->repositorio = $repositorio;
    }

    public function execute(Mascota $mascota): void {
        $this->repositorio->eliminar($mascota);
    }
}