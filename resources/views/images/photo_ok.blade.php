@extends('../template_ls')

@section('title')
   contact Form
@stop

@section('content')
<br>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">Envoie d'une photo</div>
            <div class="panel-body">
                Merci votre image à bien été reçue et enregistrée.
            </div>
            
        </div>
        <!-- Bouton de retour à la page précédente -->
    <a href="javascript:history.back()" class="btn btn-primary">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
    </a>
    </div>
     <!-- Retour -->
     <!--{!! link_to('photo', 'Retour Accueil', array('class' => 'btn btn-primary')) !!}-->
     
     
</div>
@stop
