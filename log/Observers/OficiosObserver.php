<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 26/06/14
 * Time: 16:13
 */

namespace Oficios\Observers;
use Oficios\Repositories\LogRepo;
use Oficios\Managers\LogManager;

class OficiosObserver  extends BaseObserver{

    protected $logRepo;



    public function updating($model){

        $this->logRepo = new LogRepo("oficios_log");

        $aDatos = $this->editando($model);

        foreach ($aDatos as $key=>$value){

            $logDatos  = $this->logRepo->newOficioLog(   $model->id
                                           ,$value["nombre_campo"]
                                           ,$value["valor"]);

            $logManager  = new LogManager($logDatos,[]);
            $logManager->save();
        }







    }

}