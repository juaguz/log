<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 26/06/14
 * Time: 15:56
 */

namespace Oficios\Observers;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class BaseObserver {

    protected  $datos;

    public function saving($model){


    }
    public function saved($model){





    }

    public function editando($model){

    $dirty   = $model->getDirty();
    $aCampos =[];

    foreach ($dirty as $field => $newdata)
    {

      $olddata = $model->getOriginal($field);



          $aCampos[] = array("nombre_campo"=>$field,"valor"=>$olddata);




    }
    return $aCampos;



    }

    public function updated( $model){

    }

    public function creating( $model){}

    public function created( $model){}

    public function deleting( $model){}

    public function deleted( $model){}

    public function restoring( $model){}

    public function restored( $model){}


} 
