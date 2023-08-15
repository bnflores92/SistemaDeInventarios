<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Inventario/Home');
    }

    public function PopUp()
    {
        return view('Inventario/PopUp');
    }
    public function FormularioV()
    {
        return view('Inventario/compras');
    }
    public function LoginINAB()
    {
        return view('Inventario/login');
    }

}
