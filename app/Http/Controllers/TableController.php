<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        return view('pages.tables');   // Obtener y devolver una lista de usuarios
    }

    public function create()
    {
        // Mostrar un formulario para crear un nuevo usuario
    }

    public function store(Request $request)
    {
        // Almacenar un nuevo usuario en la base de datos
    }

    public function show($id)
    {
        // Mostrar información sobre un usuario específico
    }

    public function edit($id)
    {
        // Mostrar un formulario para editar un usuario existente
    }

    public function update(Request $request, $id)
    {
        // Actualizar un usuario existente en la base de datos
    }

    public function destroy($id)
    {
        // Eliminar un usuario de la base de datos
    }
}
