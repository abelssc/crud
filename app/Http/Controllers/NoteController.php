<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $notes=Note::all();
        return view("note.index",compact("notes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view("note.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request) :RedirectResponse
    {
        $note=Note::create($request->all());
        return redirect()->route("note.show",$note->id)->with("success","Creado Correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) :View
    {
        $note= Note::find($id);
        return view("note.show",compact("note"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) :View
    {
        $note=Note::find($id);
        return view("note.edit",compact("note"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, string $id) :RedirectResponse
    {
        $note=Note::find($id);
        $note->update($request->all());
        return redirect()->route("note.show",$note->id)->with("success","editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) :RedirectResponse
    {
        $note=Note::find($id);
        $note->delete();
        return redirect()->route("note.index")->with("danger","Registro eliminado");
    }
}
