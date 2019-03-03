@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
			<a href="/home"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a>
			Incluir Item
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

    <form method="post" action="/colect/edit/{{$colect->id}}" enctype="multipart/form-data">{{ csrf_field() }}
        <label>Nome do Item:</label>
        <input type="text" name="name" value="{{$colect->name}}" class="form-control" required>
        <br />
        <label>Quantidade:</label>
        <input type="number" id="quantity" name="quantity" value="{{$colect->quantity}}" class="form-control" required>
        <br />
        <label>Descrição:</label>
        <input type="text" name="descricao" value="{{$colect->descricao}}" class="form-control" required>
        <br />
        <button type="submit" class="btn btn-primary btn-sm" >Alterar</button>
        <button type="reset" class="btn btn-primary btn-sm">Limpar</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection