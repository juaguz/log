Log de Registros en laravel.

Docu Observer:
	*http://laravel.com/docs/eloquent#model-observers

BaseObserver

Registro todo los observers, del modelo y en el metodo editando, devuelve un array, con el nombre del campo modificado, y el valor que tenia.

En OficiosObserver Registro, el motodo updating que se ejecuta cuando se esta actualizando el modelo, y lo guardo en la base de datos.

El archivo observers.php va en /app y se debe registrar en /app/start/global.php agregando la siguiente linea:
	require app_path() . '/observers.php';
