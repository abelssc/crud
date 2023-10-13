@extends("layouts.app")
@section("content")
<h1>NOTAS</h1>
<a href="{{route('note.create')}}">Crear Notas</a>
@include("layouts._partials.messages")
<ul>
    @forelse ($notes as $note)
        <li>
            <h2>
                {{$note->title}}
            </h2>
            <p>
                {{$note->description}}
            </p>
            <div style="display: flex;gap:1rem; width:fit-content">
                <a href="{{route('note.show',$note->id)}}">VER</a>
                <a href="{{route('note.edit',$note->id)}}">EDITAR</a>
                <form action="{{route('note.destroy',$note->id)}}" method="POST">
                    @csrf
                    @method("delete")
                    <input type="submit" value="ELIMINAR">
                </form>
            </div>
           
        </li>
    @empty
        <p>	No hay datos</p>
    @endforelse

</ul>
@endsection