@extends('layouts.app')

@section('title')
   A propos de LSG
@stop

@section('content')
<!-- large screen container-->
<div class="app_slider01 w3-display-container w3-hide-medium w3-hide-small" style="width:100%; height:100%; padding-top: 60px">
    <img class="w3-animate-right" src="{{asset('storage/images/aboutus02.jpg')}}" alt="aboutus" style="width:100%; height:100%;"> 
    <div class="w3-display-left"><p class="w3-text-white w3-jumbo" style="padding: 60px 0 0 200px">Pourquoi choisir Laps-store Guinée?</p></div>
</div>
<div class="w3-container w3-hide-medium w3-hide-small" style="padding: 0 0 25px 0">
    <div class="row">       
            <div class="w3-card-2 w3-container">
                <div class="row w3-white" style="padding-bottom: 16px; padding-top: 5px">
                    <div class="col-sm-7">
                        <h3 class="w3-center w3-border-bottom w3-border-blue" style="font-weight: bold; color: #05379b; padding-bottom: 16px">A propos de LSG</h3>                       
                        <div class="w3-large w3-container" style="color: #1e499b">
                         <p>
                           LSG est une entreprise de droit Guinéen, qui se veut être une réference guinéenne en matière du numerique, 
                           de l'énergie, des télecoms et de l'industrie. Nous proposons le meilleur de la technologie dans ces domaines. 
                           LSG accompagne ses clients dans toutes les phases de leurs projets en assistance technique ou au forfait. 
                           Sa spécificité est d’aborder chaque projet avec une démarche agile
                         </p> 
                            <ul class="list-group">
                                <li class="list-group-item w3-hover-light-grey"> <span class="fa fa-check w3-text-green"></span> <span>Nous enregistrons et hebergeons des sites et applications web</span></li>
                                <li class="list-group-item w3-hover-light-grey"> <span class="fa fa-check w3-text-green"></span> <span>Nous developpons des sites et applications web pour des particuliers</span></li>
                                <li class="list-group-item w3-hover-light-grey"> <span class="fa fa-check w3-text-green"></span> <span>Nous proposons des études et réalisations des projets indudtriels</span></li>
                                <li class="list-group-item w3-hover-light-grey"> <span class="fa fa-check w3-text-green"></span> <span>Nous proposons des études et réalisations des projets énergétiques</span></li>
                                <li class="list-group-item w3-hover-light-grey"> <span class="fa fa-check w3-text-green"></span> <span>Nous proposons l'exploitation et la maintenance des infrastructures</span></li>
                            </ul> 
                         Nous vous apportons ce qui existe de mieux. Notre mission est de toujours vous fournir les meilleurs produits ou services dont nous disposons.
                         Nous mettons à votre disposition un support technique réalisé par des meilleurs ingénieurs et techniciens.                        
                        </div>
                    </div>
                    <div class="col-sm-5" style="padding-top:64px"><img src="{{asset('storage/images/aboutus.jpg')}}" alt="aboutus" style="width:100%; height:250px;"></div>
                </div>
                
                <div class="row w3-light-grey w3-bottombar w3-border-blue" style="padding-bottom: 16px; padding-top: 16px">
                    <div class="col-sm-6">
                        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/businessman-01.jpg')}}" alt="businessman" style="width: 180px; height: 180px"></div>
                        <h3 class="w3-center w3-border-bottom w3-border-blue" style="font-weight: bold; color: #05379b; padding-bottom: 16px">Presentation de Laps-store Guinée</h3>                  
                        <p class="w3-large w3-container" style="text-align: justify; color: #1e499b ">
                         LSG est une société créée en 2016 et spécialisée dans le developpement, 
                         et l'hébergement des applications web; l'étude et la réalisation des projets industriels et énergétiques; 
                         l'exploitation et la maintenance des infrastructures industrielles. 
                         <br>
                         LSG conçoit et réalise des solutions qui s'adressent aussi bien aux particuliers, 
                         qu'aux professionels, associations et institutions publiques.
                         Notre savoir-faire nous amene à positionner notre métier au coeur des NTIC et des énergies. 
                         Notre audace et nos services nous permettent d'offrir à nos clients des offres packagées et des produits à forte valeur ajoutée.                       
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/call-center-01.jpg')}}" alt="businessman" style="width: 180px; height: 180px"></div>
                        <h3 class="w3-center w3-border-bottom w3-border-blue" style="font-weight: bold; color: #05379b; padding-bottom: 16px">Assistance clients 7j/7</h3>                  
                        <p class="w3-large w3-container" style="text-align: justify; color: #1e499b ">
                         Nous proposons aux clients de LSG un service client performant. Ce service dispose d'une équipe composée des meilleurs ingénieurs et techniciens, 
                         qui est à votre écoute pour répondre à toutes vos questions.
                        </p>
                    </div>                   
                </div>
                
                <div class="row w3-white w3-bottombar w3-border-blue" style="padding-bottom: 16px; padding-top: 16px">
                    <div class="col-sm-6">
                        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/statistic-01.jpg')}}" alt="businessman" style="width: 180px; height: 180px"></div>
                        <h3 class="w3-center w3-border-bottom w3-border-blue" style="font-weight: bold; color: #05379b; padding-bottom: 16px">Quelques chiffres cléfs</h3>                  
                        <div class="w3-large w3-container" style="text-align: justify ">
                            <ul class="list-group" style="color: #1e499b; padding: 0 5px 0 5px">
                                <li class="list-group-item w3-hover-light-grey"><i class="fa fa-check w3-text-green"></i> Année de création 2016</li>
                                <li class="list-group-item w3-hover-light-grey"><i class="fa fa-check w3-text-green"></i> Capital social: 50 000 000 GNF </li>
                                <li class="list-group-item w3-hover-light-grey"><i class="fa fa-check w3-text-green"></i> Portefeuille clientel: 200</li>
                                <li class="list-group-item w3-hover-light-grey"><i class="fa fa-check w3-text-green"></i> Investissement réalisé: 200 000 000 GNF</li>
                                <li class="list-group-item w3-hover-light-grey"><i class="fa fa-check w3-text-green"></i> Projet en cours de réalisation: 50 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/legal-01.jpg')}}" alt="businessman" style="width: 180px; height: 180px"></div>
                        <h3 class="w3-center w3-border-bottom w3-border-blue" style="font-weight: bold; color: #05379b; padding-bottom: 16px">Informations Légales</h3>                  
                        <div class="w3-large w3-container" style="text-align: justify; color: #1e499b ">
                          <ul class="list-group" style="color: #1e499b; padding: 0 5px 0 5px">
                            <li class="list-group-item w3-hover-light-grey"><i class="fa fa-check w3-text-green"></i>LSG (Laps-store Guinée, www.gn.laps-store.com)</li>
                            <li class="list-group-item w3-hover-light-grey"><i class="fa fa-check w3-text-green"></i>Société à responsabilité limité au capital de 50 000 000 GNF</li>
                            <li class="list-group-item w3-hover-light-grey"><i class="fa fa-check w3-text-green"></i>N°RCCM: GC-KAL/070.949B/2016</li>
                            <li class="list-group-item w3-hover-light-grey"><i class="fa fa-check w3-text-green"></i>N°Compte bancaire: 0030070000440983 SGBG</li>
                          </ul>
                        </div>
                    </div>                   
                </div>                
            </div>                    
    </div>
</div>

<!-- small screen container-->
<div class="w3-container w3-padding-64 w3-hide-large" onclick="w3.hide('#appSidebar')">
    <div class="panel panel-info">
        <div class="panel-heading w3-xlarge w3-center">A propos de LSG</div>
        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/aboutus.jpg')}}" alt="aboutus" style="width:200px; height:100px"></div>
        <div class="panel-body w3-large">
            LSG est une entreprise de droit Guinéen, qui se veut être une réference guinéenne en matière du numerique, 
            de l'énergie, des télecoms et de l'industrie. Nous proposons le meilleur de la technologie dans ces domaines. 
            LSG accompagne ses clients dans toutes les phases de leurs projets en assistance technique ou au forfait. 
            Sa spécificité est d’aborder chaque projet avec une démarche agile.
            <ul class="list-group">
                <li class="list-group-item w3-hover-light-grey"> Nous enregistrons et hebergeons des sites web</li>
                <li class="list-group-item w3-hover-light-grey"> Nous developpons des sites et applications web</li>
                <li class="list-group-item w3-hover-light-grey"> Nous proposons des études et réalisations des projets indudtriels</li>
                <li class="list-group-item w3-hover-light-grey"> Nous proposons des études et réalisations des projets énergétiques</li>
                <li class="list-group-item w3-hover-light-grey"> Nous proposons l'exploitation et la maintenance des infrastructures</li>
            </ul>
            Nous vous apportons ce qui existe de mieux. Notre mission est de toujours vous fournir les meilleurs produits ou services dont nous disposons.
            Nous mettons à votre disposition un support technique réalisé par des meilleurs ingénieurs et techniciens
        </div>       
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading w3-xlarge w3-center">Présentation de LSG</div>
        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/businessman-01.jpg')}}" alt="business" style="width:100px; height:100px;"></div>
        <div class="panel-body w3-large">
            LSG est une société créée en 2016 et spécialisée dans le developpement, 
            et l'hébergement des applications web; l'étude et la réalisation des projets industriels et énergétiques; 
            l'exploitation et la maintenance des infrastructures industrielles. 
            <br>
            LSG conçoit et réalise des solutions qui s'adressent aussi bien aux particuliers, 
            qu'aux professionels, associations et institutions publiques.
            Notre savoir-faire nous amene à positionner notre métier au coeur des NTIC et des énergies. 
            Notre audace et nos services nous permettent d'offrir à nos clients des offres packagées et des produits à forte valeur ajoutée.
        </div>    
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading w3-xlarge w3-center">Assistance clients 7j/7</div>
        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/call-center-01.jpg')}}" alt="assistance" style="width:100px; height:100px;"></div>
        <div class="panel-body w3-large">
            Nous proposons aux clients de LSG un service client performant. Ce service dispose d'une équipe 
            composée des meilleurs ingénieurs et techniciens, qui est à votre écoute pour répondre à toutes vos questions.
        </div>    
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading w3-xlarge w3-center">Quelques chiffres cléfs</div>
        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/statistic-01.jpg')}}" alt="assistance" style="width:100px; height:100px;"></div>
        <div class="panel-body w3-large">
            <ul class="list-group" style="color: #1e499b; padding: 0 5px 0 5px">
                <li class="list-group-item w3-hover-light-grey"> Année de création 2016</li>
                <li class="list-group-item w3-hover-light-grey"> Capital social: 50 000 000 GNF </li>
                <li class="list-group-item w3-hover-light-grey"> Portefeuille clientel: 200</li>
                <li class="list-group-item w3-hover-light-grey"> Investissement réalisé: 200 000 000 GNF</li>
                <li class="list-group-item w3-hover-light-grey"> Projet en cours de réalisation: 50 </li>
            </ul>
        </div>    
    </div>
    
    <div class="panel panel-info">
        <div class="panel-heading w3-xlarge w3-center">Informations Légales</div>
        <div class="w3-center"><img class="w3-circle" src="{{asset('storage/images/legal-01.jpg')}}" alt="assistance" style="width:100px; height:100px;"></div>
        <div class="panel-body w3-large">
           <ul class="list-group" style="color: #1e499b; padding: 0 5px 0 5px">
               <li class="list-group-item w3-hover-light-grey">LSG (Laps-store Guinée, www.gn.laps-store.com)</li>
               <li class="list-group-item w3-hover-light-grey">Société à responsabilité limité au capital de 50 000 000 GNF</li>
               <li class="list-group-item w3-hover-light-grey">N°RCCM: GC-KAL/070.949B/2016</li>
               <li class="list-group-item w3-hover-light-grey">N°Compte bancaire: 0030070000440983 SGBG</li>
           </ul> 
        </div>    
    </div>
    
    
</div>
@stop
