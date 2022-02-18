<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    function __construct()
    {
        $this->middleware('can:notes.index', ['only' => ['index','show']]);
        $this->middleware('can:notes.create', ['only' => ['create','store']]);
        $this->middleware('can:notes.edit', ['only' => ['edit','update']]);
        $this->middleware('can:notes.delete', ['only' => ['destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "<a href='http://127.0.0.1:8000/notes'>Create</a>";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "<a href='http://127.0.0.1:8000/notes'>Store</a>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "<a href='http://127.0.0.1:8000/notes'>Show</a>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "<a href='http://127.0.0.1:8000/notes'>Edit</a>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "<a href='http://127.0.0.1:8000/notes'>update</a>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "<a href='http://127.0.0.1:8000/notes'>Destroy</a>";
    }
}
