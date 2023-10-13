@extends("layouts.app")
@section("content")
<a href="{{route('note.index')}}">Back</a>
<h1>Crear Nota</h1>
@include("layouts._partials.errores")
<form action="{{route('note.store')}}" method="post">
    @csrf
    <label for="title">Titulo</label>
    <input type="text" name="title" id="title" placeholder="title">
    <label for="description">Descripcion</label>
    @error("title")
        <p class="danger">{{$message}}</p>
    @enderror
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    @error("description")
        <p class="danger">{{$message}}</p>
    @enderror
    <input type="submit" value="Registrar">
</form>
@endsection