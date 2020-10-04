<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos/novo', 'AlunosController@create');
Route::post('/alunos/novo', 'AlunosController@insert')->name('inserir_aluno');
Route::put('/alunos/novo/{id}', 'AlunosController@update')->name('atualizar_aluno');
Route::delete('/alunos/novo/{id}', 'AlunosController@delete')->name('deletar_aluno');

Route::get('/cursos/novo', 'CursosController@create');
Route::post('/cursos/novo', 'CursosController@insert')->name('inserir_curso');
Route::put('/cursos/novo/{id}', 'CursosController@update')->name('atualizar_curso');
Route::delete('/cursos/novo/{id}', 'CursosController@delete')->name('deletar_curso');

Route::get('/certificados/novo', 'CertificadosController@create');
Route::get('/certificados/certificado/{id}', 'CertificadosController@certificado')->name('pdf');
Route::post('/certificados/novo', 'CertificadosController@insert')->name('inserir_certificado');
Route::delete('/certificados/novo/{id}', 'CertificadosController@delete')->name('deletar_certificado');

