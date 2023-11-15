<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // NOTE: Para tener acceso al controlador, protegemos de que el usuario debe estár autenticado
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Para debuguear los campos que mandamos al servidor
        // dd($request);
        // dd($request->get('username'));

        // Modificar el request. Para realizar la validación de slug
        $request->request->add(['username' => Str::slug( $request->username )]);
        
        // Validaciones en formularios
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make( $request->password )
        ]);
        
        // Autenticar un usuario
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        // Otra forma de  autenticar
        // auth()->attempt($request->only('email', 'password'));
        

        // Redireccionar
        return redirect()->route('posts.index');

    }
    
}
