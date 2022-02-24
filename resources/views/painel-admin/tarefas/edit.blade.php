@extends('template.painel-admin')
@section('title', 'Editar Categoria')
@section('content')
<h6 class="mb-4"><i>EDIÇÃO DE CATEGORIAS</i></h6><hr>
<form method="POST" action="{{route('tarefas.editar', $item)}}">
        @csrf
        @method('put')

        <div class="row">

<div class="col-md-3">
    <div class="form-group">
        <label for="exampleInputEmail1">Descrição</label>
        <input value="{{$item->descricao}}" type="text" class="form-control" id="" name="descricao" required>
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

        <option value='{{$item->categoria}}' >{{$item->categoria}}</option>

        @foreach($tabela as $val)
        <?php if($item->categoria != $val->nome){ ?>
            <option value='{{$val->nome}}' >{{$val->nome}}</option>
        <?php } ?>
        @endforeach

        </select>
    </div>
</div>
        </div>

<div class="row">

<div class="col-md-3">
    <div class="form-group">
        <label for="exampleInputEmail1">Concluido</label>
        <input value="{{$item->concluido}}" type="text" class="form-control" id="" name="concluido">
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="exampleInputEmail1">Data</label>
        <input value="{{$item->data}}"  type="date" class="form-control" id="data" name="data">
    </div>
</div>

</div>

<div class="row">
    <p align="right">
        <input  type="hidden" name="old" value="{{$item->descricao}}">
        <button type="submit" class="btn btn-primary">Salvar</button>
        </p>

</div>



    </form>
@endsection
