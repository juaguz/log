<?php
use Oficios\Entities\Oficios;
use Oficios\Entities\Personas;
use Oficios\Observers\OficiosObserver;
use Oficios\Observers\PersonasObserver;


Oficios::observe(new OficiosObserver($app->make('updating')));

Personas::observe(new PersonasObserver($app->make('updating')));


?>