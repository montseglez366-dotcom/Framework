<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('framework'); // Nombre del archivo pagina.blade.php
});
