<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\Departamentos;;
use App\Models\Estudiantes;
use App\Models\Municipios;
use App\Models\Paises;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Cursos::all();
        $paises = Paises::all();
        $departametos = Departamentos::all();
        $municipios = Municipios::all();
        $apprentice = Estudiantes::all();
        return view('students.index', compact('apprentice', 'cursos', 'paises', 'departamentos', 'municipios'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Cursos::all();
        $paises = Paises::all();
        $departametos = Departamentos::all();
        $municipios = Municipios::all();
        return view('students.index', compact('cursos', 'paises', 'departamentos', 'municipios'));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $apprentice = new Estudiantes();
        $apprentice->id_estudiante = $request->input('id_estudiante');
        $apprentice->numero_documento = $request->input('numero_documento');
        if($request->hasFile('documento_identidad')){
            $apprentice->documento_identidad = $request->file('documento_identidad')->store('public/students/identify_document/');
        }
        $apprentice->id_expdicion_municipio = $request->input('id_expdicion_municipio');
        $apprentice->fecha_expedicion = $request->input('fecha_expedicion');
        $apprentice->nombre = $request->input('nombre');
        $apprentice->primer_apellido = $request->input('primer_apellido');
        $apprentice->segundo_apellido = $request->input('segundo_apellido');
        $apprentice->genero = $request->input('genero');
        $apprentice->fecha_nacimiento = $request->input('fecha_nacimiento');
        $apprentice->id_muni_nacimiento = $request->input('id_muni_nacimiento');
        $apprentice->estrato = $request->input('estrato');
        $apprentice->id_cursos = $request->input('id_cursos');
        $apprentice->save();
        return view('students.add_student'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiantes $estudiantes)
    {
        $cursos = Cursos::find($id);
        $paises = Paises::find($id);
        $departametos = Departamentos::find($id);
        $municipios = Municipios::find($id);
        $apprentice = Estudiantes::find($id);
        return view('students.show', compact('apprentice', 'cursos', 'paises', 'departamentos', 'municipios'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiantes $estudiantes)
    {
        $cursos = Cursos::find($id);
        $paises = Paises::find($id);
        $departametos = Departamentos::find($id);
        $municipios = Municipios::find($id);
        $apprentice = Estudiantes::find($id);

        return view('students.edit', compact('apprentice', 'courses', 'countries', 'departments', 'municipalities')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiantes $estudiantes)
    {
        $apprentice = Estudiantes::find($id);
        // return $apprentice;
        $apprentice->fill($request->except('documento_identidad', 'exped_land', 'exped_dept', 'id_pais_nacimiento', 'id_departamento_nacimiento'));
        if($request->hasFile('documento_identidad')){
            $apprentice->identify_document = $request->file('documento_identidad')->store('public/students/documento_identidad');
        }
        $apprentice->save();
        return view('students.edit_student'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiantes $estudiantes)
    {
        $apprentice = Estudiantes::find($id);
        $urlDocument = $apprentice->documento_identidad;
        $documentName = str_replace('public/', '\storage\\', $urlDocument);
        $fullRoute = public_path() . $documentName;
        unlink($fullRoute);
        $apprentice->delete();
        return view('students.del_student');//
    }
}
