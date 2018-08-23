@extends('layouts.principal')

@section('conteudo')
<div id="wrapper" class="toggled">
@include('layouts.menu')
<div id="page-content">
    <div class="container-fluid">
        <div class="card" style="width: 38rem;">
        <div class="card-body">
        <h2>Atualizar {{ $cliente->nome_cliente }}</h2>
        @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
      @endif
        <form method="POST" action="{{ url('/update', $cliente->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-12 {{ $errors->has('nome_cliente') ? ' has-error' : '' }}">
                    <label for="nome_cliente">Nome:</label>
                    <input type="text" class="form-control" name="nome_cliente" value="{{ $cliente->nome_cliente }}">
                    @if ($errors->has('nome_cliente'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nome_cliente') }}</strong>
                                    </span>
                                @endif
                  </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12{{ $errors->has('email_cliente') ? ' has-error' : '' }}">
                        <label for="email_cliente">E-Mail:</label>
                        <input type="email" class="form-control" name="email_cliente" value="{{ $cliente->email_cliente }}">
                        @if ($errors->has('email_cliente'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email_cliente') }}</strong>
                                    </span>
                                @endif
                      </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12{{ $errors->has('celular_cliente') ? ' has-error' : '' }}">
                            <label for="celular_cliente">Celular:</label>
                            <input type="tel" class="form-control" name="celular_cliente" value="{{ $cliente->celular_cliente }}">
                            @if ($errors->has('celular_cliente'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('celular_cliente') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12{{ $errors->has('endereco_cliente') ? ' has-error' : '' }}">
                                <label for="endereco_cliente">Endereço:</label>
                                <input type="text" class="form-control" name="endereco_cliente" value="{{ $cliente->endereco_cliente }}">
                                @if ($errors->has('endereco_cliente'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('endereco_cliente') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <button type="submit" class="btn btn-places">Atualizar</button>
                                </div>
                            </div>
            </div>
        </form>
    </div>
</div>
    </div>
</div>
</div>
@endsection