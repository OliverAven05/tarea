<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Libro;
use Illuminate\Support\Facades\Auth;

class PrestamoController extends Controller
{
    public function create(Request $request)
    {
        $id_libro = $request->input('id_libro');
        $libro = Libro::findOrFail($id_libro);

        return view('prestamos.create', compact('libro'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_libro' => 'required|exists:libros,id_libro',
            'inicio' => 'required|date',
            'fin' => 'required|date|after:inicio'
        ]);

        Prestamo::create([
            'user_id' => Auth::id(),
            'id_libro' => $request->input('id_libro'),
            'inicio' => $request->input('inicio'),
            'fin' => $request->input('fin'),
            'estado' => 'pendiente'
        ]);

        return redirect()->route('prestamos.index');
    }
    public function index()
    {
        $prestamos = Prestamo::where('user_id', Auth::id())
                            ->with('libro')
                            ->orderBy('created_at', 'desc')
                            ->get();

        return view('prestamos.index', compact('prestamos'));
    }
    public function edit($id)
    {
    $prestamo = Prestamo::find($id);
    if (!$prestamo) {
        return redirect()->back()->with('error', 'Préstamo no encontrado');
    }
    return view('prestamos.edit', compact('prestamo'));
    
}
}


