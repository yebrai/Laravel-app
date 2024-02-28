@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
<h1>En esta pagina podras editar un curso</h1>
<form action="{{route('cursos.update', $curso)}}" method="POST">

    @csrf

    @method('put')

    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{$curso->name}}">
    </label>

    <br>
    <label>
        Description:
        <br>
        <textarea name="description"  rows="10" >{{$curso->description}}</textarea>
    </label>

    <br>
    <label>
        Nombre:
        <br>
        <input type="text" name="category" value="{{$curso->category}}">
    </label>
    <br>
    <button type="submit">Actualizar formulario</button>

</form>
@endsection
