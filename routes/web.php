<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('produtos', function () {
    return "Página de Produtos";
});
Route::get('produtos/inserir', function (){
   return "Página de inserir produtos";
});
Route::get('produtos/{nome}/{valor?}', function ($nome, $valor = null){
    if($valor){
        return "O nome do produto é $nome, e seu valor é $valor";
    }else{
        return "O nome do produto é $nome!";
    }
});
Route::get('/', HomeController::class);
