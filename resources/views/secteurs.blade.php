@extends('layouts.app')

@section('title')
   Secteurs
@stop

@section('content')

  <!--large screen content-->
    <div class="w3-padding-32 w3-hide-medium w3-hide-small">
        <div class="w3-display-container" style="width:100%; height:100%; padding-bottom: 8px">
           <img src="{{asset('storage/images/solaire02.jpg')}}" alt="solaire" style="width:100%; height:100%;"> 
           <div class="w3-display-middle"><p class="w3-text-white w3-jumbo" >Secteurs d'activités</p></div>
        </div>
        <div class="w3-container w3-padding-16">

          <!-- Tabs navbar-->
          <div class="w3-bar w3-black w3-xlarge">
            <button class="w3-bar-item w3-button tablink w3-red w3-hover-red w3-mobile" onclick="openTabs(event,'energy')" style="border-right: 1px solid ">Energies et Industries</button>
            <button class="w3-bar-item w3-button tablink w3-hover-red w3-mobile" onclick="openTabs(event,'ingenieur')" style="border-right: 1px solid ">Commerce et Distribution</button>
            <button class="w3-bar-item w3-button tablink w3-hover-red w3-mobile" onclick="openTabs(event,'telecom')" style="border-right: 1px solid ">Technologies Informatiques</button>
            <button class="w3-bar-item w3-button tablink w3-hover-red w3-mobile" onclick="openTabs(event,'informatic')" style="border-right: 1px solid ">Télécom et Multimédia</button>
          </div>

          <!-- Tabs contents  -->
          <div class="w3-container w3-card-2 w3-white w3-bottombar w3-border-red">
              <!--energy and industry expertise page-->
              <div id="energy" class="expertise w3-padding-16">
                  <div class="panel panel-info">
                      <div class="panel-heading w3-xxlarge">Secteur Energétique et Industriel</div>                     
                      <div class="panel-content">
                          <div class="row">
                              <div class="col-md-7">
                                  <p class="w3-padding-16 w3-container w3-xlarge">
                                      L’évolution du mix énergétique dans le monde ouvre de nombreuses opportunités pour l’ingénierie et les Energies Renouvelables, l’expertise des équipes LSG couvre la totalité du secteur. 
                                      Elle s’étend de l’avant-projet au démarrage des installations, avec une forte présence durant la phase d’ingénierie. 
                                      LSG accompagne tous types d’acteurs dans leurs projets les plus innovants.
                                  </p>
                              </div>
                              <div class="col-md-5"><img src="{{asset('storage/images/energy03.jpg')}}" alt="energie" style="width:100%; height:100%;"></div>
                          </div>                         
                      </div>                      
                  </div>                
              </div>
 
              <!--Commerce sector page-->
              <div id="ingenieur" class="expertise w3-padding-16" style="display:none">
                  <div class="panel panel-info">
                      <div class="panel-heading w3-xxlarge">Commerce et Distribution</div>
                      <div class="panel-content">
                          <div class="row">
                              <div class="col-sm-7">
                                  <p class="w3-padding-16 w3-container w3-xlarge">
                                     LSG mise beaucoup sur la phase d'ingénierie d'un projet, c'est à dire la phase d'étude de faisabilité
                                     (Avant Projet Sommaire APS) ainsi que la phase de dimensionnement technique (Avant Projet Detaillé APD), 
                                     c'est pourquoi d'ailleurs toute une équipe d'ingénieurs compétents est mobilisée en son sein pour mener à bien
                                     cette phase cruciale de tout projet.
                                  </p>
                              </div>
                              <div class="col-sm-5"><img src="{{asset('storage/images/ingenierie01.jpg')}}" alt="ingenierie" style="width:100%; height:100%;"></div>
                          </div>                         
                      </div>                      
                  </div>
                  
              </div>

              <!--Informatique sector page-->
              <div id="telecom" class="expertise w3-padding-16" style="display:none">
                  <div class="panel panel-info">
                      <div class="panel-heading w3-xxlarge">Technologies Informatiques</div>
                      <div class="panel-content">
                          <div class="row">
                              <div class="col-sm-7">
                                  <p class="w3-padding-16 w3-container w3-xlarge">
                                    L'installation, la gestion et la sécurisation des équipements de communication pour tout type de réseau;
                                    le développement et l'administration des systèmes d'exploitation (Windows, Linux, Android...) et 
                                    des services réseaux (web, messagerie, téléphonie...) sont des compétences indispensables dans le monde des 
                                    des télécommunications, que detienent les ingénieurs et techniciens de LSG.    
                                  </p>
                              </div>
                              <div class="col-sm-5"><img src="{{asset('storage/images/telecom01.jpg')}}" alt="solaire" style="width:100%; height:100%;"></div>
                          </div>                         
                      </div>                      
                  </div>
              </div>

              <!--Telecom and media sector page-->
              <div id="informatic" class="expertise w3-padding-16" style="display:none">
                <div class="panel panel-info">
                    <div class="panel-heading w3-xxlarge"> Télécom et Multimedia</div>
                      <div class="w3-hide-large"><img src="{{asset('storage/images/numeric03.jpg')}}" alt="solaire" style="width:100%; height:100%;"></div>
                      <div class="panel-content">
                          <div class="row">
                              <div class="col-sm-7">
                                  <p class="w3-padding-16 w3-container w3-xlarge">
                                    La révolution des satellites, du câble, de la téléphonie mobile a entraîné de forts besoins en terme d'emplois. 
                                    Les qualifications et compétences dont les entreprises ont besoin ont des standards de plus en plus exigeants. 
                                    Le multimédia s'est imposé dans les classements professionnels de toutes les grandes entreprises et, y compris bien sur, 
                                    au niveau des télécommunications. Qu'on en juge plutôt; en quelques années des produits (comme le téléphone portable) 
                                    sont devenus des biens de très grande consommation. De ce fait, le besoin d'infrastructures, s'accroissent dans des 
                                    proportions impressionnantes d'une année sur l'autre, autant de facteurs à l'origine d'une demande intense 
                                    de compétences nouvelles et d'effectifs renforcés. Aujourd'hui, l'arrivée de la fibre optique qui d'ici 2020 doit 
                                    couvrir l'ensemble du pays permet l'arrivée de la 4G.  Le téléphone outil de paiement, de réservation, 
                                    de guidage permet à distance de télécommander des robots, de télésurveiller sa maison, de transmettre des informations 
                                    télévisuelles...etc. Au total, chacun s'accorde à penser que les télécommunications au sens large représentent un 
                                    secteur porteur d'avenir. C'est pourquoi LSG a mis ce secteur au centre de ces activités.
                                  </p>
                              </div>
                              <div class="col-sm-5"><img src="{{asset('storage/images/numeric03.jpg')}}" alt="solaire" style="width:100%; height:100%;"></div>
                          </div>                         
                      </div>                      
                  </div>
              </div>
          </div>

        </div>
    </div>
  
    <!--small screen content-->
    <div class="w3-hide-large" style="margin-top: 55px" onclick="w3.hide('#appSidebar')">
        
        <div class="w3-display-container" style="width:100%; height:100%; padding-bottom: 5px">
           <img src="{{asset('storage/images/solaire02.jpg')}}" alt="solaire" style="width:100%; height:100px;"> 
           <div class="w3-display-left" style="margin-left: 80px"><p class="w3-text-white w3-xlarge" >Pôles de compétences</p></div>
        </div>
        
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
              <div id="exp_enr" class="panel-heading w3-black eltlink" style="opacity: 0.85" >
              <div  class="panel-title w3-large" >
                <div class="row">
                    <div class="col-xs-2"><i id="exp_caret1" class="exp_caret fa fa-plus-square"></i></div>
                    <div class="col-xs-10 ">
                        <a class="w3-text-white" data-toggle="collapse" data-parent="#accordion" href="#exp_col1" 
                           onclick="w3.removeClass('.eltlink','w3-red'); w3.addClass('.eltlink','w3-black'); 
                               w3.toggleClass('#exp_enr', 'w3-black', 'w3-red'); w3.removeClass('.exp_caret','fa-minus-square');
                               w3.addClass('.exp_caret','fa-plus-square'); w3.toggleClass('#exp_caret1', 'fa-minus-square', 'fa-plus-square');
                               ">
                            Energies et Industries
                        </a>
                    </div>
                </div>
              </div>
            </div>
            <div id="exp_col1" class="panel-collapse collapse">
              <img src="{{asset('storage/images/energy03.jpg')}}" alt="energie" style="width:100%; height:100%;">
              <div class="panel-body w3-large w3-text-black">
                L’évolution du mix énergétique dans le monde ouvre de nombreuses opportunités pour l’ingénierie et les Energies Renouvelables, l’expertise des équipes LSG couvre la totalité du secteur. 
                Elle s’étend de l’avant-projet au démarrage des installations, avec une forte présence durant la phase d’ingénierie. 
                LSG accompagne tous types d’acteurs dans leurs projets les plus innovants.
              </div>
            </div>
          </div>
            
          <div class="panel panel-default">
            <div id="exp_ing" class="panel-heading w3-black eltlink" style="opacity: 0.85">
              <div class="panel-title w3-large">
                <div class="row">
                  <div class="col-xs-2"><i id="exp_caret3" class="exp_caret fa fa-plus-square"></i></div>
                    <div class="col-xs-10 ">
                        <a class="w3-text-white" data-toggle="collapse" data-parent="#accordion" href="#exp_col3" 
                           onclick="w3.removeClass('.eltlink','w3-red'); w3.addClass('.eltlink','w3-black'); 
                                    w3.toggleClass('#exp_ing', 'w3-black', 'w3-red'); w3.removeClass('.exp_caret','fa-minus-square'); 
                                    w3.addClass('.exp_caret','fa-plus-square'); w3.toggleClass('#exp_caret3', 'fa-minus-square', 'fa-plus-square');
                           ">
                           Commerce et Distribution
                        </a>
                    </div>
                </div>
              </div>
            </div>
            <div id="exp_col3" class="panel-collapse collapse">
              <img src="{{asset('storage/images/ingenierie01.jpg')}}" alt="ingenierie" style="width:100%; height:100%;">
              <div class="panel-body w3-large w3-text-black">
                  LSG mise beaucoup sur la phase d'ingénierie d'un projet, c'est à dire la phase d'étude de faisabilité
                  (Avant Projet Sommaire APS) ainsi que la phase de dimensionnement technique (Avant Projet Detaillé APD), 
                  c'est pourquoi d'ailleurs toute une équipe d'ingénieurs compétents est mobilisée en son sein pour mener à bien
                  cette phase cruciale de tout projet.
              </div>
            </div>
          </div>
          
          <div class="panel panel-default">
            <div id="exp_tra" class="panel-heading w3-black eltlink" style="opacity: 0.85">
              <div class="panel-title w3-large">
                <div class="row">
                  <div class="col-xs-2"><i id="exp_caret4" class="exp_caret fa fa-plus-square"></i></div>
                    <div class="col-xs-10 ">
                        <a class="w3-text-white" data-toggle="collapse" data-parent="#accordion" href="#exp_col4" 
                           onclick="w3.removeClass('.eltlink','w3-red'); w3.addClass('.eltlink','w3-black'); 
                               w3.toggleClass('#exp_tra', 'w3-black', 'w3-red'); w3.removeClass('.exp_caret','fa-minus-square'); 
                               w3.addClass('.exp_caret','fa-plus-square');  w3.toggleClass('#exp_caret4', 'fa-minus-square', 'fa-plus-square');                  
                           ">
                            Technologies Informatiques
                        </a>
                    </div>
                </div>
              </div>
            </div>
            <div id="exp_col4" class="panel-collapse collapse">
              <img src="{{asset('storage/images/travaux01.jpg')}}" alt="travaux" style="width:100%; height:100%;">
              <div class="panel-body w3-large w3-text-black">
                  Après les phases APS et APD d'un projet, les équipes de LSG ont un grand savoir faire et une
                  experience everée, pour accompagner les entreprises, les associations, les institutions
                  et les particuliers dans la mise en oeuvre de leurs projets dans tous les domaines de compétence de LSG.  
              </div>
            </div>
          </div>
            
          <div class="panel panel-default">
            <div id="exp_tel" class="panel-heading w3-black eltlink" style="opacity: 0.85">
              <div class="panel-title w3-large">
                <div class="row">
                  <div class="col-xs-2"><i id="exp_caret5" class="exp_caret fa fa-plus-square"></i></div>
                    <div class="col-xs-10 ">
                        <a class="w3-text-white" data-toggle="collapse" data-parent="#accordion" href="#exp_col5" 
                           onclick="w3.removeClass('.eltlink','w3-red'); w3.addClass('.eltlink','w3-black'); 
                               w3.toggleClass('#exp_tel', 'w3-black', 'w3-red'); w3.removeClass('.exp_caret','fa-minus-square'); 
                               w3.addClass('.exp_caret','fa-plus-square'); w3.toggleClass('#exp_caret5', 'fa-minus-square', 'fa-plus-square');                              
                           ">
                            Télécom et Multimédia
                        </a>
                    </div>
                </div>
              </div>
            </div>
            <div id="exp_col5" class="panel-collapse collapse">
              <img src="{{asset('storage/images/telecom01.jpg')}}" alt="travaux" style="width:100%; height:100%;">
              <div class="panel-body w3-large w3-text-black">
                  L'installation, la gestion et la sécurisation des équipements de communication pour tout type de réseau;
                  le développement et l'administration des systèmes d'exploitation (Windows, Linux, Android...) et 
                  des services réseaux (web, messagerie, téléphonie...) sont des compétences indispensables dans le monde des 
                  des télécommunications, que detienent les ingénieurs et techniciens de LSG. 
              </div>
            </div>
          </div>          
        </div>
    </div>   
           
@stop

                
                                    
                                  
