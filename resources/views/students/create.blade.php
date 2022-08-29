@extends('layouts.app_3')

@section('title', 'Agregar Estudiante')

@section('content')

<h2 class="text-start mx-3 mt-5 pt-3">Crear Estudiante Nuevo </h2>

    <div class="container2 form bg-light text-dark rounded">
        <h3 class="text-start mx-3 mt-5 pt-3">Información básica</h3>
        <br>
        <div class="text mx-5 mb-4">
            <p>Para registrarse debe ingresar información de identificación.
            
            </p>
        </div>
        <hr>
        <div class="row">
                <div class="col-sm-4 mx-5 pb-3 rounded">
                        <form action="/students" method="POST" class="" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                @foreach ($errors->all() as $alert)
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            <li>{{$alert}}</li>
                                        </ul>
                                    </div>
                                @endforeach
                            @endif
                            <h5>Documenento de identidad</h5>
                            <br>
                                <div class="form-group row">
                                    <label for="id_estudiante" class="col-sm-6 col-form-label">Tipo de documento *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="id_estudiante" name="id_estudiante">
                                            <option>Seleccionar</option>
                                            <option value="CC">CC</option>
                                            <option value="TI">TI</option>
                                            <option value="CE">CE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="numero_documento" class="col-sm-6 col-form-label">No. de documento *</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="numero_documento" id="numero_documento">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="documento_identidad" class="col-sm-6 col-form-label">Cargue Docum. Identificación *</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="hidden" id="documento_identidad" name="documento_identidad" accept="application/pdf" title="Examinar"/>
                                        {{-- <input type="button" class="btn btn-success" value="Examinar"> --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exped_land" class="col-sm-6 col-form-label">País de expedición *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="exped_land" id="exped_land">
                                            <option>Seleccionar</option>
                                            @foreach ( $paises as $land)
                                                <option value="">{{ $land->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exped_dept" class="col-sm-6 col-form-label">Depto. donde fue expedido *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="exped_dept" name="exped_dept">
                                            <option>Seleccionar</option>
                                            @foreach ( $departamentos as $dept)
                                                <option value="">{{ $dept->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="id_exped_muni" class="col-sm-6 col-form-label">Municipio donde fue expedido *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="id_exped_muni" name="id_exped_muni">
                                            <option>Seleccionar</option>
                                            @foreach ( $municipios as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="expedition_date" class="col-sm-6 col-form-label">Fecha de expedición *</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" name="expedition_date" id="expedition_date">
                                    </div>
                                </div>
                </div>
                <div class="col-sm rounded">
                </div>
                <div class="col-sm-5 mx-5 px-1 pb-3 rounded">
                        <h5>Datos de identificación</h5>
                        <br>
                            <div class="form-group row">
                                <label for="nombre" class="col-sm-6 col-form-label">Nombres *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="primer_apellido" class="col-sm-6 col-form-label">Primer apellido *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="primer_apellido" name="primer_apellido">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="segundo_apellido" class="col-sm-6 col-form-label">Segundo apellido</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="segundo_apellido" name=segundo_apellido>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="genero" class="col-sm-6 col-form-label">Género *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" class="id_estudiante" id="genero" name="genero">
                                        <option>Seleccionar</option>
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                        <option value="OTROS">OTROS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fecha_nacimiento" class="col-sm-6 col-form-label">Fecha de nacimiento *</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_pais_nacimiento" class="col-sm-6 col-form-label">País de nacimiento *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="id_pais_nacimiento" id="id_pais_nacimiento">
                                        <option>Seleccionar</option>
                                        @foreach ( $paises as $land)
                                            <option value="">{{ $land->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_departamento_nacimiento" class="col-sm-6 col-form-label">Departamento de nacimiento *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="id_departamento_nacimiento" id="id_departamento_nacimiento">
                                        <option>Seleccionar</option>
                                        @foreach ( $departamentos as $dept)
                                            <option value="">{{ $dept->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_municipio_nacimiento" class="col-sm-6 col-form-label">Municipio de nacimiento *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="id_municipio_nacimiento" id="id_municipio_nacimiento">
                                        <option>Seleccionar</option>
                                        @foreach ( $municipios as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="estrato" class="col-sm-6 col-form-label">Estrato socioeconómico *</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="estrato" id="estrato">
                                        <option>Seleccionar</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">6</option>
                                        <option value="8">6</option>
                                        <option value="9">6</option>
                                        <option value="10">6</option>

                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_cursos" class="col-sm-6 col-form-label">Curso</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="id_cursos" id="id_cursos">
                                        <option>Seleccionar</option>
                                        @foreach ( $cursos as $grade)
                                            <option value="{{ $grado->id }}">{{ $grado->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="buttons">
                                <a href="/students/" class="btn btn-secondary">Regresar</a>
                                <button type="submit" class="btn btn-success" value="Guardar">Guardar</button>
                            </div>
                        </form>
            </div>
        </div>
    </div>
    <br>

@endsection
