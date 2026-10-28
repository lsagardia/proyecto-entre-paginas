<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Juguete;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        
        return redirect()->intended('/libros');
    }

    return back()
        ->withErrors([
            'email' => 'El correo o la contraseña son incorrectos.',
        ])
        ->onlyInput('email');
})->name('login.authenticate');



Route::middleware('auth')->group(function () {
    
    
    Route::get('/libros', function () {
        $libros = Libro::all(); 
        return view('libros', ['libros' => $libros]);
    })->name('libros');

    
    Route::post('/logout', function (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    })->name('logout');
});




Route::get('/juguetes', function () {
    $juguetes = Juguete::all();
    return view('juguetes.lista', ['juguetes' => $juguetes]);
});


Route::get('/juguetes/nuevo', function () {
    return view('juguetes.formulario');
});

Route::post('/juguetes/nuevo', function () {
    $validated = request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/juguetes');
});