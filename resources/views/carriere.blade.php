@extends('layouts.app')

@section('title')
   A propos de LSG
@stop

@section('content')
<div class="container" style="padding: 50px 0 30px 0">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="w3-center" style="color: #05379b">Pourquoi choisir Laps-store Guinée?</h1>
            <div class="w3-card-2">
                <div class="row w3-white w3-bottombar w3-border-blue" style="padding-bottom: 16px; padding-top: 16px">
                    <div class="col-sm-7">
                        <h3 class="w3-center w3-border-bottom w3-border-blue" style="font-weight: bold; color: #05379b; padding-bottom: 16px">A propos de LSG</h3>                       
                        <p class="w3-large w3-container" style="text-align: justify; color: #1e499b">
                         LWS est l'un des meilleurs hébergeurs web de France, avec plus de 180 000 domaines 
                         et hébergements web et 15 ans d'expérience. Nous proposons le meilleur de la technologie, 
                         nos serveurs frontaux qui calculent les sites ont un cycle de vie de 2 ans cela pour toujours 
                         vous apporter ce qui existe de mieux. 
                         Notre mission est de toujours vous fournir le meilleur hébergement web, donc fiable, sécurisé,
                         rapide et avec inclus un support technique réalisé par des personnes formées sur les outils 
                         du web. Hébergeur web par passion.
                        </p>
                    </div>
                    <div class="col-sm-5" style="padding-top:64px"><img src="{{asset('storage/images/aboutus.jpg')}}" alt="aboutus" style="width:100%; height:100%;"></div>
                </div>
                
                <div class="row w3-light-grey w3-bottombar w3-border-blue" style="padding-bottom: 16px; padding-top: 16px">
                    <div class="col-sm-6">
                        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/businessman-01.jpg')}}" alt="businessman" style="width: 180px; height: 180px"></div>
                        <h3 class="w3-center w3-border-bottom w3-border-blue" style="font-weight: bold; color: #05379b; padding-bottom: 16px">Presentation de Laps-store Guinée</h3>                  
                        <p class="w3-large w3-container" style="text-align: justify; color: #1e499b ">
                         LWS est l'un des meilleurs hébergeurs web de France, avec plus de 180 000 domaines 
                         et hébergements web et 15 ans d'expérience. Nous proposons le meilleur de la technologie, 
                         nos serveurs frontaux qui calculent les sites ont un cycle de vie de 2 ans cela pour toujours 
                         vous apporter ce qui existe de mieux. 
                         Notre mission est de toujours vous fournir le meilleur hébergement web, donc fiable, sécurisé,
                         rapide et avec inclus un support technique réalisé par des personnes formées sur les outils 
                         du web. Hébergeur web par passion.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/call-center-01.jpg')}}" alt="businessman" style="width: 180px; height: 180px"></div>
                        <h3 class="w3-center w3-border-bottom w3-border-blue" style="font-weight: bold; color: #05379b; padding-bottom: 16px">Assistance clients 7j/7</h3>                  
                        <p class="w3-large w3-container" style="text-align: justify; color: #1e499b ">
                         LWS est l'un des meilleurs hébergeurs web de France, avec plus de 180 000 domaines 
                         et hébergements web et 15 ans d'expérience. Nous proposons le meilleur de la technologie, 
                         nos serveurs frontaux qui calculent les sites ont un cycle de vie de 2 ans cela pour toujours 
                         vous apporter ce qui existe de mieux. 
                         Notre mission est de toujours vous fournir le meilleur hébergement web, donc fiable, sécurisé,
                         rapide et avec inclus un support technique réalisé par des personnes formées sur les outils 
                         du web. Hébergeur web par passion.
                        </p>
                    </div>                   
                </div>
                
                <div class="row w3-white w3-bottombar w3-border-blue" style="padding-bottom: 16px; padding-top: 16px">
                    <div class="col-sm-6">
                        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/statistic-01.jpg')}}" alt="businessman" style="width: 180px; height: 180px"></div>
                        <h3 class="w3-center w3-border-bottom w3-border-blue" style="font-weight: bold; color: #05379b; padding-bottom: 16px">Quelques chiffres cléfs</h3>                  
                        <div class="w3-large w3-container" style="text-align: justify ">
                            <ul class="" style="list-style-type:none; color: #1e499b; padding: 0 5px 0 5px ">
                                <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Année de création 2016</li>
                                <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Capital social: 50 000 000 GNF </li>
                                <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Portefeuille clientel: 200</li>
                                <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Investissement réalisé: 200 000 000 GNF</li>
                                <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Projet en cours de réalisation: 50 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/legal-01.jpg')}}" alt="businessman" style="width: 180px; height: 180px"></div>
                        <h3 class="w3-center w3-border-bottom w3-border-blue" style="font-weight: bold; color: #05379b; padding-bottom: 16px">Informations Légales</h3>                  
                        <p class="w3-large w3-container" style="text-align: justify; color: #1e499b ">
                         LWS est l'un des meilleurs hébergeurs web de France, avec plus de 180 000 domaines 
                         et hébergements web et 15 ans d'expérience. Nous proposons le meilleur de la technologie, 
                         nos serveurs frontaux qui calculent les sites ont un cycle de vie de 2 ans cela pour toujours 
                         vous apporter ce qui existe de mieux. 
                         Notre mission est de toujours vous fournir le meilleur hébergement web, donc fiable, sécurisé,
                         rapide et avec inclus un support technique réalisé par des personnes formées sur les outils 
                         du web. Hébergeur web par passion.
                        </p>
                    </div>                   
                </div>
                
                
                
            </div>    
            
        </div>
    </div>
</div>
@stop
