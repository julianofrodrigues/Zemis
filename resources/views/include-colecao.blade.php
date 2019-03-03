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

	<form method="post" action="{{route('colect.store')}}" enctype="multipart/form-data">{{ csrf_field() }}
        	<label>Nome do Item</label>
        	<input type="text" name="name" class="form-control" required>
        <br />
        	<label>Quantidade</label>
        	<input type="number" id="quantity" name="quantity" class="form-control" required>
        <br />
        	<label for="foto"> Descrição </label>
        	<input type="text" name="descricao" class="form-control" required>
        <br />
        <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
        <button type="reset" class="btn btn-primary btn-sm">Limpar</button>
    	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection