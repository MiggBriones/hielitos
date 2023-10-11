<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // NOTE: Para tener acceso al controlador, protegemos de que el usuario debe estár autenticado
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // Testeando objeto guardado en sesión para autenticar
        // dd(auth()->user());
        return view('dashboard');
    }
}
