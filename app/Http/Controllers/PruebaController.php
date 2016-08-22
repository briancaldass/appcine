<?php

namespace Cinema\Http\Controllers;

 use Cinema\User;
 use Cinema\Http\Controllers\Controller;

class PruebaController extends Controller
{
    
    public function index()
    {
        return "hola desde este controlador";
    }

     public function nombre($nombre)
    {
        return "el nombre es :".$nombre;
    }
}