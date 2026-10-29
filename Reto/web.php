<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Mensaje;
use App\Models\Juguete;

Route::get('/', function () {
    return view('login');
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


//---libros---//
Route::get('/libros/nuevo', function () {
    return view('libros.formulario_libro');
});

// guarda libros//
Route::post('/libros/nuevo', function (Illuminate\Http\Request $request) {
    $request->validate([
        'titulo' => 'required',
        'autor' => 'required',
        'genero' => 'required',
    ]);
    
    \App\Models\Libro::create([
        'titulo' => $request->input('titulo'),
        'autor' => $request->input('autor'),
        'genero' => $request->input('genero'),
    ]);
    
    return redirect('/libros');
});
//---libros---//



//--contacto---//

Route::post('/contacto', function (Illuminate\Http\Request $request) {
    $request->validate([
        'nombre' => 'required',
        'correo' => 'required|email',
        'mensaje' => 'required',
    ]);
    Mensaje::create([
        'nombre' => $request->input('nombre'),
        'correo' => $request->input('correo'),
        'mensaje' => $request->input('mensaje'),
    ]);
    return redirect('/contacto')->with('exito', '¡Mensaje enviado con éxito!');
})->name('contacto.guardar');

//---contacto-----//




//--juguetes---//

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
        'stock' => 'required|integer',
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
        'stock.required' => 'indicar que debe ingresar el stock.',
        'stock.integer' => 'indicar que debe ingresar un número entero.',
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock'),
    ]);

    return redirect('/juguetes');
});
//--juguetes---//