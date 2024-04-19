@extends('layoutForm')
@section('content')
<section class="container mt-5">
<form class="row g-3" method="Post" action="#">
@csrf

  <div class="col-md-4">
    <label for="inputTelefoneClie" class="form-label">Telefone para contato:</label>
    <input type="text" class="form-control" id="inputTelefoneClie" name="telefoneClie" placeholder="11 956184279">
  </div>

  <div class="col-4">
    <label for="inputCpf" class="form-label">CPF:</label>
    <input type="text" class="form-control" id="inputCpf" name="cpfClie" placeholder="43851278499">
  </div>

  <div class="col-4">
    <label for="inputCep" class="form-label">CEP:</label>
    <input type="text" class="form-control" id="inputCep" name="cepClie" placeholder="02887562">
  </div>

  <div class="col-md-9">
    <label for="inputRua" class="form-label">Rua:</label>
    <input type="text" class="form-control" id="inputRua" name="ruaClie" placeholder="Prof. Ângelo Castrucci">
  </div>

  <div class="col-3">
    <label for="inputBairro" class="form-label">Bairro:</label>
    <input type="text" class="form-control" id="inputBairro" name="bairroClie" placeholder="Bom Clima">
  </div>

  <div class="col-3">
    <label for="inputCidade" class="form-label">Cidade:</label>
    <input type="text" class="form-control" id="inputCidade" name="cidadeClie" placeholder="Guarulhos">
  </div>

  <div class="col-3">
    <label for="inputUf" class="form-label">Estado:</label>
    <input type="uf" class="form-control" id="inputUf" name="ufClie" placeholder="SP">
  </div>

  <div class="col-3">
    <label for="inputNumero" class="form-label">Número:</label>
    <input type="number" class="form-control" id="inputnumero" name="numeroClie" placeholder="82">
  </div>

  <div class="col-3">
    <label for="inputCompl" class="form-label">Complemento:</label>
    <input type="text" class="form-control" id="inputCompl" name="complClie" placeholder="apt 8">
  </div>

  <div class="col-3">
    <label for="inputQuant" class="form-label">Quantidade (Kg):</label>
    <input type="number" class="form-control" id="inputQuant" name="quantClie" placeholder="10">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Fazer pedido</button>
  </div>
</form>
<section>
@endsection