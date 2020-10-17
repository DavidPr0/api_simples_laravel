<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCliente;

Route::apiResource('clientes', ApiCliente::class);
