@extends('layouts.app_3')

@section('title', 'Mostrar Estudiantes')

@section('content')

    <h1 class="text-center mt-5 ">Informacion de estudiante</h1>

    <div class="container2 form bg-light text-dark rounded">
        <h3 class="text-start mx-3 mt-5 pt-3">Información básica</h3>
        <br>

        <hr>
        <div class="row">
                <div class="col-sm-5 mx-5 pb-3 rounded">
                            <h5>Documento de identidad</h5>
                            <br>

                                <div class="form-group row">
                                    <b> Tipo de documento:</b>
                                    <div class="col-sm-6">
                                        <span>{{$apprentice->documento_identidad}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>No. de documento </b>
                                    <div class="col-sm-6">
                                        <span class="">{{$apprentice->numero_documento}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>Documento pdf:</b>
                                    <div class="col-sm-6">
                                        <iframe src="{{ Storage::url($apprentice->documento_identidad) }}" width="100" height="100"></iframe>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>País de expedición: </b>
                                    <div class="col-sm-6">
                                        <span class="">{{$paises->nombre}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>Depto. de expedición: </b>
                                    <div class="col-sm-6">
                                        <span class="">{{$departamentos->nombre}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>Municipio de expedición: </b>
                                    <div class="col-sm-6">
                                        <span class="">{{$municipios->nombre}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <b>Fecha de expedición: </b>
                                    <div class="col-sm-6">
                                        <span class="">{{$apprentice->fecha_expedicion}}</span>
                                    </div>
                                </div>
                </div>
                <div class="col-sm ms-5 me-5 pb-3 rounded">
                </div>
                <div class="col-sm-4 mx-5 px-1 pb-3 rounded">
                        <h5>Datos de identificación</h5>
                        <br>
                            <div class="form-group row">
                                <b>Nombres: </b>
                                <div class="col-sm-6">
                                    <span class="">{{$apprentice->nombres}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Primer apellido: </b>
                                <div class="col-sm-6">
                                    <span class="">{{$apprentice->primer_apellido}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Segundo apellido: </b>
                                <div class="col-sm-6">
                                    <span class="">{{$apprentice->segundo_apellido}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Género: </b>
                                <div class="col-sm-6">
                                    <span class="">{{$apprentice->genero}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Fecha de nacimiento: </b>
                                <div class="col-sm-6">
                                    <span class="">{{$apprentice->fecha_nacimiento}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>País de nacimiento: </b>
                                <div class="col-sm-6">
                                    <span class="">{{$paises->nombre}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Depto. de nacimiento: </b>
                                <div class="col-sm-6">
                                    <span class="">{{$departamentos->nombre}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Municipio de nacimiento: </b>
                                <div class="col-sm-6">
                                    <span class="">{{$municipios->nombre}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Estrato socioeconómico: </b>
                                <div class="col-sm-6">
                                    <span class="">{{$apprentice->estrato}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <b>Curso matriculado: </b>
                                <div class="col-sm-6">
                                    {{-- <span class="">{{$cursos->id}} {{$cursos->nombre}}</span> --}}
                                </div>
                            </div>
                            <br>
                            <div class="button mb-3">
                                <a href="/students/" class="btn btn-secondary">Regresar</a>
                            </div>
            </div>
        </div>
    </div>
    <br>
@endsection
