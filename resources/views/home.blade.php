@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Colecione
                <a href="colect/create"><button type="button" class="btn btn-primary btn-sm">Adicionar Item</button></a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<table class="table">
    <thead> 
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
        @foreach($colecaos as $colecao)
        
        
        <tr>
        <td title="Nome">{{$colecao->name}}</td>
        <td title="Quantidade">{{$colecao->quantity}}</td>
        <td title="Descrição">{{$colecao->descricao}}</td>
        <td>
            <a onclick="direcionar('/colect/edit/' + '{{ $colecao->id }}')" style="color: blue; text-decoration: underline; cursor: pointer">
            <button type="button" class="btn btn-primary btn-sm">
            Editar
            </button>
            </a>

            <a onclick="direcionar('/colect/destroy/' + '{{ $colecao->id }}')" method="get" 
                    style="color: blue; text-decoration: underline; cursor: pointer">
            <button type="button" class="btn btn-primary btn-sm">        
                Excluir
            </button>    
            </a>
        </td>
        
       
    
        </tr>
        
    @endforeach
    </tbody>
</table>
                </div>
                <script>
    function direcionar(rota){ 
        window.location.href= rota
    } 
</script>
            </div>
        </div>
    </div>
</div>
@endsection
