@extends('layouts.principal')

@section('conteudo')
<div class="login">
    <div class="login-form-bg">
        <div class="login-form">
           <div class="container">
               <div class="logo">
                   <img src="{{ asset('images/logo-bevicred.png') }}" alt="logo Places"/>
               </div>
                <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        @if(session()->has('login_error'))
                        <div class="alert alert-danger">
                            {{ session()->get('login_error') }}
                        </div>
                        @endif
                        <div class="form-group row{{ $errors->has('identity') ? ' has-error' : '' }}">
                            <label for="identity" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="identity" type="identity" class="form-control" name="identity" value="{{ old('identity') }}" placeholder="exemplo@email.com" required autofocus>

                                @if ($errors->has('identity'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('identity') }}</strong>
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
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembrar login!') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-places">
                                    {{ __('Entrar') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu a senha?') }}
                                </a>
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
                    <h2>Ainda não tem login?</h2>
                        <a href="{{ route('register') }}" class="btn btn-white">{{__('Cadastrar')}}</a>
                </div>          
            </div>
        </div>
    </div>
</div>
@endsection
