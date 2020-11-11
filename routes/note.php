
<?php

/*
|--------------------------------------------------------------------------
| Note Routes
|--------------------------------------------------------------------------
|
| Aqui estan algunos recordatorio de como realizar ciertas actividades.
|
*/

// Creacion de rutas, "/" que es la ruta por de la raiz
Route::get('/',function(){ 
    Return view('welcome'); });
// ruta especifica
Route::get('/contacto',function(){ 
    Return "Mensaje"; });
// ruta con parametro obligatorio
Route::get('saludo/{parametro}',function($parametro){ 
    Return "Hola" . $parametro; });
// ruta sin parámetro obligatorio
Route::get('saludo/{parametro?}', function($parametro = "parametroPorDefecto"){
    Return "Hola " . $parametro; });
//Rutas con Nombre
Route::get('contactos',function(){ 
    Return "Seccion de Contactos" ; });

Route::get('/',function()
{ 
echo "<a href='/contactos'>Enlace_Visible_1</a><br>"; 
echo "<a href='/contactos'>Enlace_Visible_2</a><br>"; 
});
// Rutas con Nombre (Dinamico, que se pueden cambiar desde su origen
Route::get('nombre_a_cambiar',function(){ 
Return "Seccion de Contactos" ; 
})->name('referencia');
// Poner links hacia otras rutas
Route::get(‘/’,function()
{ 
echo "<a href='". route('contactanos') ."'>Enlace_Visible_1</a><br>"; 
echo "<a href='". route('contactanos') ."'>Enlace_Visible_2</a><br>"; 
});
// Pasar parametros a vistas forma 1
Route::get('/', function () {
    $nombre = "jorge";
    return view('home')->with('nombre', $nombre);
})->name('home');
// Pasar parametros a vistas forma 2
Route::get('/', function () {
    $nombre = "jorge";
    return view('home')->with(['nombre'=> $nombre]);
})->name('home');
// Pasar parametros a vistar forma 3
Route::get('/', function () {
    $nombre = "jorge";
    return view('home', compact('nombre'));
})->name('home');
// Pasar parametros a vistar forma 4 con modificaciones en la misma vista
Route::view('/','home');
// Aqui debemos modificar en la vista home, la variable nombre con un valor
// o un valor predefinido con "??" sin los "_"
//<_?php echo $nombre ?? "invitado"?_>
// o podemos pasarlo a directamente como parametro en la funcion view
Route::view('/','home', [$nombre => 'valor']);

