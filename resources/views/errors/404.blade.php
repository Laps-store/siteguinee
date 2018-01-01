@extends('layouts.app')

@section('title')
   404 page not found
@stop

@section('content')
<br>
<div class="w3-container w3-padding-64" onclick="w3.hide('#appSidebar')">
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <p class="panel-title w3-center w3-xxlarge w3-hide-medium w3-hide-small">Oops, Page non trouvée !</p>
                    <p class="panel-title w3-center w3-xlarge w3-hide-large">Oops, Page non trouvée !</p>
                </div>
                <div class="w3-center w3-padding-16">
                    <img src="{{asset('storage/images/404-image.png')}}" alt="pageNotFound" style="width:100px; height:100px;">
                </div>
                <div class="panel-body"> 
                   <p class="w3-xlarge w3-center w3-hide-medium w3-hide-small">Nous sommes désolés mais la page que vous désirez n'existe pas...</p>
                   <p class="w3-large w3-center w3-hide-large">Nous sommes désolés mais la page que vous désirez n'existe pas...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
            <a href="javascript:history.back()" class="btn btn-success">
                <span class="glyphicon glyphicon-arrow-left"></span> <span class="w3-large">Retour </span>
            </a>
        </div>
    </div>
</div>
@stop
