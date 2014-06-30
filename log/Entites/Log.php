<?php namespace Oficios\Entities;


class Log extends \Eloquent
{
    protected $table;


    public function __construct($table){

        $this->table = $table;

    }




}
?>