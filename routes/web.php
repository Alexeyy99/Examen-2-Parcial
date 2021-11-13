<?php

use App\Http\Livewire\Empleados\CreateEmpleado;
use App\Http\Livewire\Empleados\DeleteEmpleado;
use App\Http\Livewire\Empleados\EditEmpleado;
use App\Http\Livewire\Empleados\IndexEmpleados;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/empleados', IndexEmpleados::class)->name('empleados.index');

Route::get('/empleados/crear', CreateEmpleado::class)->name('empleados.create');

Route::get('/empleados/{empleado}/editar', EditEmpleado::class)->name('empleados.edit');

Route::get('/empleados/{empleado}/eliminar', DeleteEmpleado::class)->name('empleados.delete');
