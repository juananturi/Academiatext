@extends('layouts.app')

@section('title', 'Mostrar cursos')

@section('content')

    <div class="bg-light text-dark rounded mt-5 pt-5 mb-5 pb-5 text-center">
        <img src="{{ Storage::url($grade->image) }}" width="350" height="310" class="mb-5">
        <p class="card-text"> <b>Contenido:</b> {{$grade->description}} </p>
        <p class="card-text"> <b>Duración:</b> {{$grade->duration}} Horas</p>
        <div class="text-center p-3">
            <a href="/courses/{{$grade->id}}/edit" class="btn btn-warning">Editar</a>
            <br>
            <br>
            {{-- Para este caso no se necesita escribir destroy en la ruta como sí escribimos
            edit en la ruta para obtener el formulario de edición. Aquí creamos un formulario
            simplemente para poder incluir el botón para eliminar --}}
            <form class="form-group" action="/courses/{{$grade->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>

@endsection
