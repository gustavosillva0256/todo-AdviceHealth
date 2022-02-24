<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tarefa;

class ApiTarefaControllher extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabela = tarefa::all();
        return  response()->json(['tabela'=>$tabela]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabela = $request->all();

        tarefa::create($tabela);

        return  response()->json(['tabela'=>$tabela]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $tabelaRequest = $request->all();
        $tabela = tarefa::findOrFail($id);
        $tabela->update($tabelaRequest);


        return response()->json(['msg'=>'Dados atualizado com sucesso','tabela'=>$tabela]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabela = tarefa::find($id);
        $tabela->delete();

        return response()->json(['msg'=> 'Dados excluidos com sucesso!', 'tabela'=>$tabela]);
    }
}
