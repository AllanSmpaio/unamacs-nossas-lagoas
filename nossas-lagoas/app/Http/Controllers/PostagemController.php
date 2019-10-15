<?php

namespace App\Http\Controllers;

use App\Postagem;
use Illuminate\Http\Request;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("postagem");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postagem = new Postagem();
        $postagem->titulo = $request->input('titulo');
        $postagem->descrição = $request->input('descricao');
        $path = $request->file("anexo")->store('images', 'public');
        $postagem->anexo = $path;
        date_default_timezone_set('America/Bahia');
        $data_atual = date('Y-m-d H:i:s', time());
        $postagem->data_postagem = $data_atual;
        $postagem->save();
        return redirect()->route('postagem.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postagem  $postagem
     * @return \Illuminate\Http\Response
     */
    public function show(Postagem $postagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postagem  $postagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Postagem $postagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postagem  $postagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postagem $postagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postagem  $postagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postagem $postagem)
    {
        //
    }
}
