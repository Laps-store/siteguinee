@extends('layouts.app')

@section('title')
   Confirmation de reception 
@stop

@section('content')
<br>
<div class="row w3-padding-64">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading w3-center"><h1>Confirmation de reception de votre message</h1></div>
            <div class="panel-body">
                <p class="w3-xlarge">Merci, votre email à bien été transmis au responsable commercial de Laps-store Guinée, vous receverez très bientôt une réponse.</p>
            </div>
            
        </div>
        <a href="{{url('/')}}" class="btn btn-primary w3-large">Accueil</a>
    </div>
</div>
@stop

