<?php

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
    return view('auth.login');
});


Route::post('/filtros', 'PersonaController@storepreguntas')->name('storepreguntas');

Route::post('/addpostulante', 'PersonaController@create');


//Fotos
Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/mail', 'MailController@basic_email');

Route::resource('userDemos', 'UserDemoController');

Route::resource('parentescos', 'ParentescoController');

Route::resource('discapacidads', 'DiscapacidadController');

Route::resource('personas', 'PersonaController');
Route::get('personas/{id}/create', 'PersonaController@createmiembro');
Route::post('miembros/', 'PersonaController@storemiembro');

Route::resource('personaDiscapacidads', 'Persona_DiscapacidadController');

Route::resource('personaParentescos', 'Persona_ParentescoController');

Route::resource('institucions', 'InstitucionController');

Route::resource('turnos', 'TurnoController');

Route::resource('semestres', 'SemestreController');

Route::resource('departamentos', 'DepartamentoController');

Route::resource('personaInstitucions', 'Persona_InstitucionController');

Route::resource('preguntaCats', 'Pregunta_CatController');

Route::resource('preguntas', 'PreguntaController');

Route::resource('institucionCats', 'Institucion_CatController');

Route::resource('personaPres', 'Persona_PreController');


Route::resource('entidadesCats', 'Entidades_catController');

Route::resource('entidades', 'EntidadesController');