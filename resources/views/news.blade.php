@extends('layouts.app')

@section('title')
   News
@stop

@section('content')
<!--large screen content-->
<div class="w3-hide-medium w3-hide-small">
    <div class="app_slider01 w3-display-container " style="width:100%; height:100%;">
          <img src="{{asset('storage/images/bridg01.jpg')}}" alt="carrière" style="width:100%; height:100%;"> 
          <div class="w3-display-middle"><p class="w3-text-white w3-xxlarge" >LSG ACTU</p></div>
    </div> 
    <div class="row">
        <div class="col-lg-offset-1 col-md-10">
            <a class="" href="#">
                <div class="panel panel-default" style="margin-top: 5px">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{asset('storage/images/maligouv.jpg')}}" alt="mali" style="width:100%; height:100%;">
                            </div>
                            <div class="col-md-10 ">
                                <div class="w3-xlarge w3-text-black w3-hover-text-blue" style="font-weight: bold"> 
                                    Mali : démission surprise du Premier ministre et du gouvernement 
                                </div>
                                <div class="w3-text-black w3-large">
                                    Le Premier ministre malien Abdoulaye Idrissa Maiga a présenté vendredi sa démission ...
                                </div>
                            </div>               
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!--small screen content-->
<div class="w3-hide-large w3-mobile" style="padding-top: 55px" onclick="w3.hide('#appSidebar')">
    <div class="app_slider01 w3-display-container " style="width:100%; height:100%;">
      <img src="{{asset('storage/images/bridg01.jpg')}}" alt="carrière" style="width:100%; height:100%;"> 
      <div class="w3-display-middle"><p class="w3-text-white w3-xlarge" >LSG ACTU</p></div>
    </div> 
    <a class="" href="#">
        <div class="panel panel-default" style="margin: 5px ">
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-5">
                        <img src="{{asset('storage/images/maligouv.jpg')}}" alt="mali" style="width:100%; height:100%;">
                    </div>
                    <div class="col-xs-7 w3-text-black" style="font-weight: bold">
                        Mali : démission surprise du Premier ministre et du gouvernement
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
@stop
