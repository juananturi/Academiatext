@extends('layouts.app')

@section('title', 'Lista Cursos')

@section('content')

    <h2 class="text-center mt-5 p-t5">Listado de cursos</h2>

    {{-- Sirve para iterar arrays, Es decir nos permite realizar ciclos --}}
    <div class="row bg-light text-dark rounded mt-5 pt-3 mb-3 pb-3">
        @foreach ( $grade as $training )
        {{--  la doble llave sirve para interpolar, interpolar es traer una variable de otro lenguaje al lenguaje que se esta usando acutalmente --}}

            <div class="col-sm">
                <div class="card" style="width: 20rem;">
                    <img src="{{ Storage::url($training->image) }}" width="300" height="220" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center"> {{$training->name}} </h5>
                        <br>
                        <div class="text-center">
                            <a href="/courses/{{$training->id}}" class="btn btn-primary">Ver detalles</a>
                        </div>
                    </div>
                </div>
                <br>
            </div>

        @endforeach
    </div>

@endsection

