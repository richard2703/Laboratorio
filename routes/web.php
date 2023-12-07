<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/resultados', function () {
//     return view('resultados');
// });
Route::get('resultado', [App\Http\Controllers\resultadosClienteController::class, 'buscar'])->name('resultado.buscar');
Route::post('resultado/ticket', [App\Http\Controllers\resultadosClienteController::class, 'index'])->name('resultado.index');
Route::post('resultado/imprimir', [App\Http\Controllers\resultadosClienteController::class, 'pdfResultado'])->name('resultado.pdf');

Route::group(['middleware' => ['role:1Admin']], function () {
    Route::get('test', function () {
        return view('test');
    });
});


// Route::get('test', function () {
//     return view('test');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('parametros', App\Http\Controllers\parametrosController::class);
    Route::resource('examenes', App\Http\Controllers\examenesController::class);
    Route::resource('maquilas', App\Http\Controllers\maquilasController::class);
    Route::resource('pacientes', App\Http\Controllers\pacientesController::class);
    Route::get('tickets/Hoja/{ticketId}', [App\Http\Controllers\ticketsController::class, 'hojaTrabajo'])->name('tickets.hojaTrabajo');
    Route::resource('tickets', App\Http\Controllers\ticketsController::class);
    Route::get('create/tickets/search', [App\Http\Controllers\ticketsController::class, 'search'])->name('search.ticket.paciente');
    Route::get('create/tickets/searchexamen', [App\Http\Controllers\ticketsController::class, 'searchexamen'])->name('search.ticket.examen');
    Route::get('/ticket/{ticket}/examenes', [App\Http\Controllers\resultadosController::class, 'index'])->name('resultados.index');
    Route::post('/ticket/{ticket}/resultados', [App\Http\Controllers\resultadosController::class, 'create'])->name('resultados.create');
    Route::post('/ticket/resultados', [App\Http\Controllers\resultadosController::class, 'store'])->name('resultados.store');
    Route::post('/ticket/{ticket}/resultados/editar', [App\Http\Controllers\resultadosController::class, 'edit'])->name('resultados.edit');
    Route::post('/ticket/resultados/update', [App\Http\Controllers\resultadosController::class, 'update'])->name('resultados.update');
    Route::post('/resultados', [App\Http\Controllers\resultadosController::class, 'pdfResultado'])->name('resultados.pdf');
    Route::get('test/print', [App\Http\Controllers\ticketsController::class, 'test'])->name('test.print');


    Route::get('/pdf', [App\Http\Controllers\resultadosController::class, 'pdftest'])->name('resultados.pdftest');
});
