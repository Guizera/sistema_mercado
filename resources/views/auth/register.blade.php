@extends('layouts.principal')

@section('conteudo')
<div class="login">
        <div class="login-form-bg">
            <div class="login-form">
               <div class="container">
                   <div class="logo">
                       <img src="{{ asset('images/logo-bevicred.png') }}" alt="logo Places"/>
                   </div>
                   @if(session()->has('message'))
            <div class="alert alert-danger">
              {{ session()->get('message') }}
            </div>
          @endif
                   <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Seu Nome" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Usuário') }}</label>
            
                            <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Nome de Usuário" required
                                     autofocus>
            
                                     @if ($errors->has('username'))
                                     <span class="invalid-feedback">
                                         <strong>{{ $errors->first('username') }}</strong>
                                     </span>
                                 @endif
                            </div>
                          </div>

                        <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="exemplo@email.com" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Sua senha" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme sua senha" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-places">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
        <div class="login-background">
            <div class="container">
                <div class="content-all">
                    <div class="content">
                        <h2>Já possui uma conta?</h2>
                            <a href="{{ route('login') }}" class="btn btn-white">{{__('Entrar')}}</a>
                    </div>          
                </div>
            </div>
        </div>
    </div>
@endsection
