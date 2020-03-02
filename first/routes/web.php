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

/* PARA DECLARAR UMA ROTA */

Route::get('/', function () {
    return "Olá mundo!";
});


Route::get('/primeira-pagina', function () {
    return "Sou a primeira página";
});


//A ordem dos códigos são importantes aqui. Se colocasse essa routa embaixo, ele entederia que home poderia ser um parametro de {numeros} e interpretaria a funcão debaixo 
Route::get('/parametros/home', function () {
    return "Página principal paramentos";
});

/* Ele pega qualquer coisa que vem depois de /parametro */

Route::get('/parametros/{numero}', function ($numero) {
    return "Página com paramentros! O parametro é {$numero}";
});

Route::get('/parametros/{numero}/{segundo}', function ($numero,$segundo) {
    return "Os parametros são: primeiro: {$numero} e segundo: {$segundo}";
});


// O ? é para parametro opcional 
Route::get('/opcional/{numero}/{segundo}/{terceiro?}', function ($numero,$segundo,$terceiro = "NADA") {
    return "Os parametros são: primeiro: {$numero}, segundo: {$segundo} e terceiro: {$terceiro}";
});

//EXERCÍCIOS 
//a. Crie um caminho chamado /meu-primeiro-caminho que, quando utilizado, imprima “Criei meu primeiro caminho em Laravel”
Route::get('/meu-primeiro-caminho', function () {
    return "Crei meu primeiro caminho Laravel";
});

//b.  Crie um caminho /par-ou-impar/{numero} que, quando utilizado, imprima uma string indicando se o número é par ou ímpar.
Route::get('/par-ou-impar/{numero}', function ($numero){
    
    //return $numero%2 === 0 ? "par" : "impar" - if ternário
    if($numero % 2 == 0){
    return " esse número é par";
    } else {
        return "esse número é ímpar";
    }
});

/* c. Modificar o caminho anterior para que possa receber um novo parâmetro opcional, por exemplo (par-ou-impar/{numero}/{numeroOpcional?}. Ou seja, se o caminho anterior receber o novo parâmetro, deve multiplicar os dois números. Caso contrário, deve indicar se ele é par ou ímpar */
Route::get('/par-ou-impar/{numero}/{numeroOpcional?}', function ($numero, $numeroOpcional= 1) {
    
return $numero * $numeroOpcional; 
});

// Um jeito de fazer o b e o c juntos
// Route::get('/par-ou-impar/{numero}/{numeroOpcional?}, function ($numero, $numeroOpcional = null){
    // if (null === $numeroOpcional) {
    //        return $numero%2 === 0 ? "par" : "impar" - if ternário
    //    } else {
    //     return $numero * $numeroOpcional; 
    //    }
   // });
