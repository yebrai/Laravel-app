@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label>
            Description:
            <br>
            <textarea name="description" rows="10" >{{old('description'. $curso->description)}}</textarea>
        </label>

        @error('description')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label>
            Nombre:
            <br>
            <input type="text" name="category" value="{{old('category', $curso->category)}}">
        </label>

        @error('category')
            <br>
            <span>{{ $message }}</span>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar Formulario</button>

    </form>
@endsection
