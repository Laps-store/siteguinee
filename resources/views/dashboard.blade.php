@extends('layouts.app')

@section('title')
   dashboard
@stop

@section('content')
<div class="container w3-padding-64" onclick="w3.hide('#appSidebar')">
    <div class="row w3-padding-16">
        <div class="col-sm-12">
            <div class="panel panel-success">
                <div class="panel-heading w3-xlarge">Tableau de bord | Bienvenue {{Auth::user()['name']}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="w3-xlarge">Vous êtes sur le site de Laps-store Guinée, une reférence en matière du numerique</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
