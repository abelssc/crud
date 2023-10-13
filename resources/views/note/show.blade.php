@extends("layouts.app")
@section("content")
@include("layouts._partials.messages")
<a href="{{route('note.index')}}">Back</a>
<h1>{{$note->title}}</h1>
<p>{{$note->description}}</p>
<div style="display: flex;gap:1rem; width:fit-content">
    <a href="{{route('note.edit',$note->id)}}">EDITAR</a>
    <form action="{{route('note.destroy',$note->id)}}" method="POST">
        @csrf
        @method("delete")
        <input type="submit" value="ELIMINAR">
    </form>
</div>
@endsection