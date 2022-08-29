<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grado = Cursos::all();//a travez de metodo all traemos la informacion de la tabla cursos
        return view('cursos.index', compact('grado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
        }//
        $grado = new Cursos();//Crear una instancia de la clase Curso
        $grado->name = $request->input('nombre');
        $grado->description = $request->input('description');
        $grado->duration = $request->input('duration');
        if($request->hasFile('imagen')){
            $grado->image = $request->file('imagen')->store('public/coursos');
        }
        $grado->save();//Comando para registrar la info en la bd
        // return 'El curso se ha guardado exitosamente';
        // return $grade->description;
        // return $grade;
        // return $request->input('name');
        return view('coursos.add_courso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grado = Cursos::find($id);
        return view('coursos.show', compact('grado')); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $grado = Cursos::find($id);
       return view('cursos.edit', compact('grado')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $grado = Cursos::find($id);
        $grado->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $grado->imagen = $request->file('imagen')->store('public/cursos');
        }
        $grado->save();
        return view('cursos.edit_corso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grado = Cursos::find($id);
        $urlImagenBD = $grado->imagen;
        $imagenNombre = str_replace('public/', '\storage\\', $urlImagenBD);
        $fullRoute = public_path() . $imagenNombre;
        unlink($fullRoute);
        $grado->delete();
        return view('cursos.del_curso');    
    }
}
