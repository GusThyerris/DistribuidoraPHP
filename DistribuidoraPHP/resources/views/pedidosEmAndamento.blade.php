@extends('layoutForm')
@section('content')
<section class="container m-5">
  <h1 class="text-center"> Gerenciar entregas pendentes</h1>
  <div class="container m-5 center">
    <form  method='get' action="{{route('gerenciar-pedidos')}}">
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="cpfPed" class="form-control" placeholder="Digite o CPF do Cliente" aria-label="">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">CEP</th>
        <th scope="col">Rua</th>
        <th scope="col">Bairro</th>
        <th scope="col">Cidade</th>
        <th scope="col">UF</th>
        <th scope="col">Número</th>
        <th scope="col">Complemento</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Telefone</th>
      </tr>
    </thead>
     <tbody>
       @foreach($registrosPedidos as $registrosPedidosLoop  )
      <tr>
        <th scope="row">{{$registrosPedidosLoop->id}}</th>
        <td>{{$registrosPedidosLoop->cepPed}}</td>
        <td>{{$registrosPedidosLoop->ruaPed}}</td>
        <td>{{$registrosPedidosLoop->bairroPed}}</td>
        <td>{{$registrosPedidosLoop->cidadePed}}</td>
        <td>{{$registrosPedidosLoop->ufPed}}</td>
        <td>{{$registrosPedidosLoop->numeroPed}}</td>
        <td>{{$registrosPedidosLoop->complPed}}</td>
        <td>{{$registrosPedidosLoop->quantPed}}</td>
        <td>{{$registrosPedidosLoop->telefonePed}}</td>
      </tr>
    @endforeach 
    </tbody>
  </table>
</section>


@endsection