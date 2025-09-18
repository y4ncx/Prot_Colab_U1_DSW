<?php

namespace Src\application\usecases;

use Src\Domain\Entities\Mascota;
use Src\domain\repositories\MascotaRepository;

class ActualizarMascota{
    private MascotaRepository $repostiorio;

    public function __Construct(MascotaRepository $repostiorio){
        $this->repostiorio = $repostiorio;
    }

    public function execute(Mascota $mascota): void{
        $this->repostiorio->actualizar($mascota);
    }


}