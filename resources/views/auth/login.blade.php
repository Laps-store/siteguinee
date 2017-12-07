@extends('layouts.app')

@section('title','Connexion')

@section('content')
<br>
    <div class="w3-padding-64">
        <div class="row">
            <div class="col-sm-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading w3-xlarge w3-center">Connexion à LSG</div>

                    <div class="panel-body">
                        <div class="w3-container">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="row">
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">Adress email</label>

                                <div class="input-group">
                                    <span class="input-group-addon w3-blue-grey"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>                                
                                </div>

                                @if($errors->has('email'))
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
                                <div class="form-group col-sm-6">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se Souvenir de moi
                                        </label>
                                    </div>

                                </div>

                                <div class="form-group col-sm-6">

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Mot de passe oublié?
                                        </a>

                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary btn-block w3-large">
                                    Se connecter
                                </button>  
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-4 col-sm-4">
                <a href="javascript:history.back()" class="btn btn-success">
                    <span class="glyphicon glyphicon-arrow-left"></span> <span class="w3-large">Retour </span>
                </a>
            </div>
        </div>
    </div>
@endsection
