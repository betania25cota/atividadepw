<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

Class ClientController extends Controllers{
    /**
     * Display a listining of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::find('1');
        return view('client', ['nome' => $client->nome, 'livro'=> $client->livro, 'devolucao' =>$data_devolucao->devolucao, 'valor' =>$pagamento->valor, 'multa' =>$multaDia->multa]);
    }
    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Uptade the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage
     * 
     * @param int $id
     * @return \Illuminate\Http\Resource
     */
    public function destroy($id)
    {
        //
    }
}