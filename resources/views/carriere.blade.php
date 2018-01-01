@extends('layouts.app')

@section('title')
   A propos de LSG
@stop

@section('content')
<div onclick="w3.hide('#appSidebar')">
    <div class="row">
       <div class="app_slider01 w3-display-container " style="width:100%; height:100%;">
          <img src="{{asset('storage/images/job2.jpg')}}" alt="carrière" style="width:100%; height:450px;"> 
          <div class="w3-display-middle"><p class="w3-text-white w3-xxlarge" >LES OFFRES D'EMPLOI PROPOSEES</p></div>
       </div>  
    </div> 
    <div class="row w3-padding-64">
        <div class="container w3-white w3-center w3-card-2">
          <p class="w3-xxlarge">En ce moment nous ne disposons pas d'Offres</p>   
        </div>
    </div>
</div>
@stop
