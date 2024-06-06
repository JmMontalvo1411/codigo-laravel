<?php

use Illuminate\Support\Facades\Route;

// En este ejercicio vamos a definir las rutas principales que va a tener nuestro sitio web.
// Para empezar simplemente indicaremos que las rutas devuelvan una cadena (así
// podremos comprobar que se han creado correctamente). A continuación se incluye una
// tabla con las rutas a definir (todas de tipo GET) y el texto que tienen que mostrar:
Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/catalog', function () {
    return view('catalog.index');
});

Route::get('/catalog/show/{id}', function ($id) {
    return view('catalog.show', ['id' => $id]);
});

Route::get('/catalog/create', function () {
    return view('catalog.create');
});

Route::get('/catalog/edit/{id}', function ($id) {
    return view('catalog.edit', ['id' => $id]);
});
