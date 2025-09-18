<?php

namespace Src\application\usecases;

use Src\Domain\Entities\Mascota;
use Src\domain\repositories\MascotaRepository;

class ConsultarMascota{
    private MascotaRepository $repositorio;


    public function __Construct(MascotaRepository $repositorio){
        $this->repositorio = $repositorio;
    }

    public function execute(Mascota $mascota): void{
        $this->repositorio->consultar($mascota);
    }


}