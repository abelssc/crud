@extends("layouts.app")
@section("content")
<a href="{{route('note.index')}}">Back</a>
<h1>Editar Nota</h1>
@include("layouts._partials.errores")
<form action="{{route('note.update',$note->id)}}" method="post">
    @csrf
    @method("put")
    <label for="title">Titulo</label>
    <input type="text" name="title" id="title" placeholder="title" value="{{$note->title}}">
    <label for="description">Descripcion</label>
    <textarea name="description" id="description" cols="30" rows="10">{{$note->description}}</textarea>
    <input type="submit" value="Registrar">
</form>
@endsection