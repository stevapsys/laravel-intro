<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumeroController extends Controller {
    public function numero() {
        return "Criei meu primeiro caminho em Laravel";
    }

    public function segundaPagina($aluno) {
        return "o aluno na url é: {$aluno}"; 
    }

    public function parOuimpar($numero) {
        return $numero%2 === 0 ? "par" : "impar";// if ternário
    }
}
