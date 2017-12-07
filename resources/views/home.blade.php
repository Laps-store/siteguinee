@extends('layouts.app')

@section('title')
   home
@stop

@section('content')
<!-- app big slider -->
<div class="w3-hide-medium w3-hide-small" style="width: 100%; height: 550px">
    <div class="app_slider01 w3-display-container " style="width:100%; height:100%;">
       <img class="w3-animate-right" src="{{asset('storage/images/industry01.jpg')}}" alt="telecom" style="width:100%; height:100%;"> 
       <div class="w3-display-middle"><p class="w3-text-white w3-jumbo" >Nous vous proposons des solutions industrielles</p></div>
    </div>
    <div class="app_slider01 w3-display-container" style="width:100%; height:100%;">
       <img class="w3-animate-right" src="{{asset('storage/images/telecom02.jpg')}}" alt="telecom" style="width:100%; height:100%;"> 
       <div class="w3-display-middle"><p class="w3-text-white w3-jumbo">Nous vous proposons des solutions telecoms</p></div>
    </div>
    <div class="app_slider01 w3-display-container" style="width:100%; height:100%;">
        <img class="w3-animate-right" src="{{asset('storage/images/informatique01.jpg')}}" alt="telecom" style="width:100%; height:100%;">  
        <div class="w3-display-middle"><p class="w3-text-white w3-jumbo">Nous vous proposons des solutions informatiques</p></div>
    </div>
    <div class="app_slider01 w3-display-container" style="width:100%; height:100%;">
        <img class="w3-animate-right" src="{{asset('storage/images/solaire01.jpg')}}" alt="telecom" style="width:100%; height:100%;"> 
        <div class="w3-display-middle"><p class="w3-text-white w3-jumbo">Nous vous proposons des solutions énergétiques</p></div>
    </div>
</div>

<div class="w3-hide-large" style="width: 100%; height: 200px">     
    <img class="app_slider02" src="{{asset('storage/images/telecom02.jpg')}}" alt="telecom" style="width:100%; height:100%;">   
</div>

<div class="w3-card-2 w3-hide-medium w3-hide-small w3-bottombar w3-border-blue" style="padding: 8px">
     <!-- large screan carousel -->
	 <div id="owl-part" class="owl-carousel">
              <div class="w3-display-container" style="">
                  <a href="#">
                      <img class="" src="{{asset('storage/images/telecom02.jpg')}}" style="width:180px; height: 101px">
                      <div id="over1" class="w3-container w3-display-bottomleft w3-padding-0 w3-black w3-center w3-opacity-min" onmouseover="w3.addStyle('#over1', 'height','100%')" onmouseout="w3.addStyle('#over1', 'height','40px')"   style="width:180px; height: 40px; opacity:0.65; ">
                         Telecommunication
                      </div>
                  </a>          
              </div>
              <div class="w3-display-container" style="">
                 <a href="#">
                      <img class="" src="{{asset('storage/images/solaire01.jpg')}}" style="width:180px; height: 101px">
                      <div id="over2" onmouseover="w3.addStyle('#over2', 'height','100%')" onmouseout="w3.addStyle('#over2', 'height','40px')"  class="w3-container w3-display-bottomleft w3-padding-0 w3-black w3-center w3-opacity-min" style="width:180px; height: 40px; opacity:0.65; ">
                         Photovoltaique
                      </div>
                  </a>

              </div>
              <div class="w3-display-container" style="">
                  <a href="#">
                      <img class="" src="{{asset('storage/images/electricity01.jpg')}}" style="width:180px; height: 101px">
                      <div id="over3" onmouseover="w3.addStyle('#over3', 'height','100%')" onmouseout="w3.addStyle('#over3', 'height','40px')"  class="w3-container w3-display-bottomleft w3-padding-0 w3-black w3-center w3-opacity-min" style="width:180px; height: 40px; opacity:0.65; ">
                         Electrotechnique
                      </div>
                  </a>
              </div>
              <div class="w3-display-container" style="">
                  <a href="#">
                      <img class="" src="{{asset('storage/images/multimedia01.jpg')}}" style="width:180px; height: 101px">
                      <div id="over4" onmouseover="w3.addStyle('#over4', 'height','100%')" onmouseout="w3.addStyle('#over4', 'height','40px')"  class="w3-container w3-display-bottomleft w3-padding-0 w3-black w3-center w3-opacity-min" style="width:180px; height: 40px; opacity:0.65; ">
                         Multimedia
                      </div>
                  </a>
              </div>
              <div class="w3-display-container" style="">
                  <a href="#">
                      <img class="" src="{{asset('storage/images/informatique01.jpg')}}" style="width:180px; height: 101px">
                      <div id="over5" onmouseover="w3.addStyle('#over5', 'height','100%')" onmouseout="w3.addStyle('#over5', 'height','40px')"  class="w3-container w3-display-bottomleft w3-padding-0 w3-black w3-center w3-opacity-min" style="width:180px; height: 40px; opacity:0.65; ">
                         Système d'information
                      </div>
                  </a>
              </div>
              <div class="w3-display-container" style="">
                  <a href="#">
                      <img class="" src="{{asset('storage/images/mecanique01.jpg')}}" style="width:180px; height: 101px">
                      <div id="over6" onmouseover="w3.addStyle('#over6', 'height','100%')" onmouseout="w3.addStyle('#over6', 'height','40px')"  class="w3-container w3-display-bottomleft w3-padding-0 w3-black w3-center w3-opacity-min" style="width:180px; height: 40px; opacity:0.65; ">
                         Mecanique
                      </div>
                  </a>
              </div>
              <div class="w3-display-container" style="">
                  <a href="#">
                      <img class="" src="{{asset('storage/images/eolienne01.jpg')}}" style="width:180px; height: 101px">
                      <div id="over7" onmouseover="w3.addStyle('#over7', 'height','100%')" onmouseout="w3.addStyle('#over7', 'height','40px')"  class="w3-container w3-display-bottomleft w3-padding-0 w3-black w3-center w3-opacity-min" style="width:180px; height: 40px; opacity:0.65; ">
                         Eoliennes
                      </div>
                  </a>
              </div>
              <div class="w3-display-container" style="">
                  <a href="#">
                      <img class="" src="{{asset('storage/images/industry01.jpg')}}" style="width:180px; height: 101px">
                      <div id="over8" onmouseover="w3.addStyle('#over8', 'height','100%')" onmouseout="w3.addStyle('#over8', 'height','40px')"  class="w3-container w3-display-bottomleft w3-padding-0 w3-black w3-center w3-opacity-min" style="width:180px; height: 40px; opacity:0.65; ">
                         Industries
                      </div>
                  </a>
              </div>
	 </div>
 </div>

<!--zone de defilement de texte-->
<div class="w3-black w3-hide-medium w3-hide-small" style="position: relative; width:100%; height:40px; overflow:hidden;">
    <div id="defile" class="w3-xlarge w3-text-white" style="position: absolute; margin-top:1px; background-color:transparent">Laps-store Guinée est une entreprise specialisée dans les technologies du numerique de l'énergie de l'industrie et du multimedia</div>
</div>

<div class="w3-row-padding w3-container" style="padding: 10px">
    <header><h1 class="w3-center w3-text-black">Nos Solutions Numeriques</h1></header>
    <div class=" w3-row w3-white w3-card-2 " style="margin: 0 8px 10px 8px; height: 205px"> 
        <div class="w3-col m4 w3-container w3-rightbar w3-border-green">
            <h2 class="">Vous souhaitez</h2>
            <ul style="list-style-type: none" class="w3-large">
                <li> <i class="fa fa-arrow-right w3-text-red"></i> Heberger vos sites web</li>
                <li> <i class="fa fa-arrow-right w3-text-red"></i> Faire realiser vos application web</li>
                <li> <i class="fa fa-arrow-right w3-text-red"></i> Avoir des logiciels adaptés à votre sitiation</li>
                <li> <i class="fa fa-arrow-right w3-text-red"></i> Profiter des avantages des sites outils</li>
            </ul>
        </div>
        <div class="w3-col m5 w3-container" style="padding-top: 48px"><h3> <span class="w3-text-red">Laps-store Guineé</span> est fait pour vous et vous propose des solutions numerique sur mesure </h3></div>
        <div class="w3-col m3" style="margin-bottom: 5px"><img class="" src="{{asset('storage/images/numeric01.jpg')}}" style="width:100%; height: 205px"></div>
    </div>
    <div class="w3-col m3">
        <a href="#">
        <div class="w3-card-2">
            <header class="w3-xlarge w3-center w3-text-white" style="height: 50px; background-color: #1e499b; padding: 8px 0 0 0">Hebergement des applis web</header>
            <img class="" src="{{asset('storage/images/cloud01.jpg')}}" style="width:100%; height: 180px">
            <div class="w3-white" style="padding: 5px">
                <h3 class="w3-center" style="color: #1e499b">Hébergement web tout inclus au meilleur prix</h3>
                <ul class="" style="list-style-type:none; color: #1e499b; padding: 0 5px 0 5px ">
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Non de domaine .com .fr ...</li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Logiciel de création de site inclus </li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Email, base de données, PHP</li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Assistance 7j/7</li>
                </ul>
            </div>
        </div>
        </a>
    </div>
    <div class="w3-col m3">
        <a href="#">
        <div class="w3-card-2">
            <header class="w3-xlarge w3-center w3-text-white" style="height: 50px; background-color: #1e499b; padding: 8px 0 0 0">Réalisation des sites web</header>
            <img class="" src="{{asset('storage/images/siteweb01.jpg')}}" style="width:100%; height: 180px">
            <div class="w3-white" style="padding: 5px">
                <h3 class="w3-center" style="color: #1e499b">Création des sites et applis web au meilleur prix</h3>
                <ul class="" style="list-style-type:none; color: #1e499b; padding: 0 5px 0 5px">
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Utilisation des meilleurs CMS (Wordpress, jomla, etc...)</li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Base de données illimités</li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Utilisation des meilleurs Framwork</li>              
                </ul>
            </div>
        </div>
        </a>
    </div>
    <div class="w3-col m3">
        <a href="#">
        <div class="w3-card-2">
            <header class="w3-xlarge w3-center w3-text-white" style="height: 50px; background-color: #1e499b; padding: 8px 0 0 0">Developpement des logiciels</header>
            <img class="" src="{{asset('storage/images/logiciel01.jpg')}}" style="width:100%; height: 180px">
            <div class="w3-white" style="padding: 5px">
                <h3 class="w3-center" style="color: #1e499b">Logiciels de gestion d'entreprise au meilleur prix</h3>
                <ul class="" style="list-style-type:none; color: #1e499b; padding: 0 5px 0 5px ">
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> logiciel de gestion de stock</li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> logiciel de gestion de maintenance</li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> logiciel de gestion de commercial</li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> logiciel de gestion de d'entreprise</li>
                </ul>
            </div>
        </div>
        </a>
    </div>
    <div class="w3-col m3">
      <a href="#">
      <div class="w3-card-2">
            <header class="w3-xlarge w3-center w3-text-white" style="height: 50px; background-color: #1e499b; padding: 8px 0 0 0">Outils numeriques</header>
            <img class="" src="{{asset('storage/images/appli01.jpg')}}" style="width:100%; height: 180px">
            <div class="w3-white" style="padding: 5px">
                <h3 class="w3-center" style="color: #1e499b">Mise à disposition des sites web outils </h3>
                <ul class="" style="list-style-type:none; color: #1e499b; padding: 0 5px 0 5px ">
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Site de formation </li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Site d'information</li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Site de mise en relation</li>
                    <li class="w3-large"><i class="fa fa-check w3-text-green"></i> Autres sites</li>
                </ul>
            </div>
        </div>
        </a>
    </div>
</div>






<script>
 w3.slideshow('.app_slider01', 10000);  
 w3.slideshow('.app_slider02', 10000);
 $(document).ready(function() {
         $(".owl-carousel").owlCarousel({
	    items : 6,
	    //Autoplay
            autoPlay : true,
            stopOnHover : true,
	    lazyLoad : true,
            navigation : false,
            navigationText : ["<<",">>"],            
	 });
         
       });
       
       //partnaire over script
        function overFonction(id){
            var x;
            x=document.getElementById(id);
            x.style.height="102px";
            };
        function outFonction(id){
            var x;
            x=document.getElementById(id);
            x.style.height="40px";
        };
        
        // scrolling text script
        var defile;// l'element a deplacer 
        var psinit = screen.availWidth; // position horizontale de depart 
        var pscrnt = psinit;       
        function texteDefile() { 
           if (!defile) defile = document.getElementById('defile'); 
           if (defile) { 
              if(pscrnt < ( - defile.offsetWidth) ){ 
                 pscrnt = psinit; 
                        } else { 
                 pscrnt+= -1; // pixel par deplacement 
              } 
              defile.style.left = pscrnt+"px"; 
           } 
        } 
        setInterval(texteDefile,20); // delai de deplacement 
        
 </script>
 {{--@php
   $page=file_get_contents('https://www.guineenews.org/');
   preg_match_all('#<h3 class="entry-title td-module-title">(.*?)</h3>#', $page, $posts);
   
   for($i=0; $i<10; $i++){
   echo $posts[0][$i];
   }  
 @endphp
 --}}
 
 
 
@stop