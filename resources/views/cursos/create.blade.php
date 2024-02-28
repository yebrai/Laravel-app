@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
<h1>En esta pagina podras crear un curso</h1>
<form action="{{route('cursos.store')}}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>

    <br>
    <label>
        Description:
        <br>
        <textarea name="description"  rows="10"></textarea>
    </label>

    <br>
    <label>
        Nombre:
        <br>
        <input type="text" name="category">
    </label>
    <br>
    <button type="submit">Enviar Formulario</button>

</form>
@endsection
