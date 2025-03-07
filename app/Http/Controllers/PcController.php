<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PcController extends Controller
{
    public function mostrarProduto()
    {
        return view("pcxp");
    }
}
