<?php

namespace App\Http\Controllers;
use App\Models\tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        $tabela = tarefa::orderby('id', 'desc')->paginate();
        return view('painel-admin.tarefas.index', ['itens' => $tabela]);
    }

    public function create(){
        return view('painel-admin.tarefas.create');
    }


    public function insert(Request $request){
        $tabela = new tarefa();

        $tabela->descricao = $request->descricao;
        $tabela->categoria = $request->categoria;
        $tabela->concluido = $request->concluido;
        $tabela->data = $request->data;

        $itens = tarefa::where('descricao', '=', $request->descricao)->count();
        if($itens > 0){
            echo "<script language='javascript'> window.alert('Tarefa já Cadastrado!') </script>";
            return view('painel-admin.tarefas.create');

        }

        $tabela->save();

        return redirect()->route('tarefas.index');

    }


    public function edit(tarefa $item){
        return view('painel-admin.tarefas.edit', ['item' => $item]);
     }


     public function editar(Request $request, tarefa $item){

        $item->descricao = $request->descricao;
        $item->categoria = $request->categoria;
        $item->concluido = $request->concluido;
        $item->data = $request->data;
        $old = $request->old;

        if($old != $request->descricao){
            $itens = tarefa::where('descricao', '=', $request->descricao)->count();
            if($itens > 0){
                echo "<script language='javascript'> window.alert('Tarefa já Cadastrado!') </script>";
                return view('painel-admin.tarefas.edit', ['item' => $item]);

            }
        }


        $item->save();
         return redirect()->route('tarefas.index');

     }


     public function delete(tarefa $item){
        $item->delete();
        return redirect()->route('tarefas.index');
     }

     public function modal($id){
        $item = tarefa::orderby('id', 'desc')->paginate();
        return view('painel-admin.tarefas.index', ['itens' => $item, 'id' => $id]);

     }


}
