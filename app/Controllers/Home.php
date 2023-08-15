<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Inventario/login');
    }

    public function PopUp()
    {
        return view('Inventario/PopUp');
    }
    public function FormularioV()
    {
        return view('Inventario/compras');//XDXDXDXDXDXD
    }
}
