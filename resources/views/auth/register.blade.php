@extends('layouts.app')

@section('title', 'Inscription')
   
@section('content')
<br>
<div class="w3-container w3-padding-64" onclick="w3.hide('#appSidebar')">
    <div class="row">
        <div class="col-sm-6 col-md-offset-3">
            <div class="panel panel-primary">
                @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                <div class="panel-heading w3-xlarge w3-center">
                  <span style="font-weight: bold">Inscription à LSG</span>
                </div>
                <div class="panel-body">
                    <div class="w3-container">
                        <form class="" method="POST" action="{{ route('register') }}">
                             {{ csrf_field() }}

                        <div class="row">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Nom</label>

                            <div class="input-group">
                                <span class="input-group-addon w3-blue-grey"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>                        
                            </div>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        </div>

                        <div class="row">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Adresse email </label>

                            <div class="input-group">
                                <span class="input-group-addon w3-blue-grey"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>                         
                            </div>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif                           
                        </div>
                        </div>

                        <div class="row">
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Mot de passe</label>

                            <div class="input-group">
                                <span class="input-group-addon w3-blue-grey"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" required>                               
                            </div>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        </div>

                        <div class="row">
                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirmation</label>

                            <div class="input-group">
                                <span class="input-group-addon w3-blue-grey"><i class="glyphicon glyphicon-repeat"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block w3-large"> S'inscrire </button>
                        </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <a href="javascript:history.back()" class="btn btn-success">
                <span class="glyphicon glyphicon-arrow-left"></span> <span class="w3-large">Retour </span>
            </a>
        </div>
    </div>
</div>
@endsection
