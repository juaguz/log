<?php


namespace Oficios\Repositories;

use Oficios\Entities\Log;


class LogRepo extends BaseRepo {
    protected $table;

    public function __construct($table){

        parent::__construct();
        $this->table = $table;

    }

    public function getModel()
    {
        return new Log($this->table);
    }

    public function newOficioLog($idOficio,$field,$value){

        $oficio =  $this->getModel();
        $oficio -> id_oficio   = $idOficio;
        $oficio -> field       = $field;
        $oficio -> value       = $value;
        $oficio->id_usuario  = \Auth::user()->id;
        return $oficio;
    }


}
