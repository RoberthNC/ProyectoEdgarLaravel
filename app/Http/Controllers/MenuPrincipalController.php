<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuPrincipalController extends Controller
{
    //
    public function __invoke()
    {
        return view('menu-principal.index');
    }
}
