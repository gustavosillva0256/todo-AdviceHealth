@extends('template.painel-admin')
@section('title', 'Inserir Tarefas')
@section('content')
<h6 class="mb-4"><i>CADASTRO DE TAREFAS</i></h6><hr>
<form method="POST" action="{{route('tarefas.insert')}}">
        @csrf

        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Descrição</label>
                    <input type="text" class="form-control" id="" name="descricao" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <select class="form-control" name="categoria" id="categoria">

                    <?php
                        use App\Models\categoria;
                        $tabela = categoria::all();
                    ?>

                    @foreach($tabela as $item)
                    <option value='{{$item->nome}}' >{{$item->nome}}</option>
                    @endforeach

                    </select>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Concluido</label>
                    <input type="text" class="form-control" id="" name="concluido" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Data</label>
                    <input value="<?php echo date('Y-m-d') ?>" type="date" class="form-control" id="data" name="data">
                </div>
            </div>

        </div>
        <div class="row">
            <p align="right">
                <button type="submit" class="btn btn-primary">Salvar</button>
                </p>
        </div>

    </form>
@endsection
