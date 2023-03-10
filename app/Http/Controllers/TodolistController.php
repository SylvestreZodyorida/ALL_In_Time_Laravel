<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $todolists= todolist::all()/*->paginate(5)*/;
        return view('todolist',compact('todolists'));
    }

    public function store(Request $request)
    {
        $data =$request->validate([
            'content'=>'required'
        ]);
        todolist::create($data);
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function destroy(todolist $todolist)
    {
        $todolist->delete();
        return back();
    }
}
