@extends('layouts.app')

@section('title')
   Expertises
@stop

@section('content')

  <!--large screen content-->
    <div class="w3-padding-32 w3-hide-medium w3-hide-small">
        <div class="w3-display-container" style="width:100%; height:100%; padding-bottom: 8px">
           <img src="{{asset('storage/images/solaire02.jpg')}}" alt="solaire" style="width:100%; height:100%;"> 
           <div class="w3-display-middle"><p class="w3-text-white w3-jumbo" >Pôles de compétences</p></div>
        </div>
        <div class="w3-container w3-padding-16">

          <!-- Tabs navbar-->
          <div class="w3-bar w3-black w3-xlarge">
            <button class="w3-bar-item w3-button tablink w3-red w3-hover-red w3-mobile" onclick="openTabs(event,'energy')" style="border-right: 1px solid ">Energies et Industries</button>
            <button class="w3-bar-item w3-button tablink w3-hover-red w3-mobile" onclick="openTabs(event,'ingenieur')" style="border-right: 1px solid ">Ingénierie et Travaux</button>
            <button class="w3-bar-item w3-button tablink w3-hover-red w3-mobile" onclick="openTabs(event,'telecom')" style="border-right: 1px solid ">Telecommunication et Media</button>
            <button class="w3-bar-item w3-button tablink w3-hover-red w3-mobile" onclick="openTabs(event,'informatic')" style="border-right: 1px solid ">Technologies informatiques</button>
          </div>

          <!-- Tabs contents  -->
          <div class="w3-container w3-card-2 w3-white w3-bottombar w3-border-red">
              <!--energy and industry expertise page-->
              <div id="energy" class="expertise w3-padding-16">
                  <div class="panel panel-info">
                      <div class="panel-heading w3-xxlarge">Expertise En Energies</div>                     
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
                  
                  <div class="panel panel-info">
                      <div class="panel-heading w3-xxlarge">Expertise En Industries</div>
                      <div class="panel-content">
                          <div class="row">
                              <div class="col-sm-7">
                                  <p class="w3-padding-16 w3-container w3-xlarge">
                                    A l'air de la mondialisation, l'industrialisation d'un pays est indispensable afin de maintenir ou d'augmenter 
                                    sa croissance économique. C'est à cet effet que LSG a mis en place une équipe compétente d'ingénieurs et de techniciens, 
                                    capable de mener à terme un projet d'industrialisation en passant par toutes les phases et ceux grace à 
                                    la forte connaissance des processus metiers. 
                                  </p>
                              </div>
                              <div class="col-sm-5"><img src="{{asset('storage/images/industry03.jpg')}}" alt="industrie" style="width:100%; height:100%;"></div>
                          </div>                         
                      </div>                      
                  </div>
                  
              </div>
 
              <!--ingenierie expertise page-->
              <div id="ingenieur" class="expertise w3-padding-16" style="display:none">
                  <div class="panel panel-info">
                      <div class="panel-heading w3-xxlarge">Expertise En Ingénierie</div>
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
                  
                  <div class="panel panel-info">
                      <div class="panel-heading w3-xxlarge">Expertise En Travaux</div>
                      <div class="panel-content">
                          <div class="row">
                              <div class="col-sm-7">
                                  <p class="w3-padding-16 w3-container w3-xlarge">
                                     Après les phases APS et APD d'un projet, les équipes de LSG ont un grand savoir faire et une
                                     experience everée, pour accompagner les entreprises, les associations, les institutions
                                     et les particuliers dans la mise en oeuvre de leurs projets dans tous les domaines de compétence de LSG.  
                                  </p>
                              </div>
                              <div class="col-sm-5"><img src="{{asset('storage/images/travaux01.jpg')}}" alt="travaux" style="width:100%; height:100%;"></div>
                          </div>                         
                      </div>                      
                  </div>
                  
              </div>

              <!--telecom expertise page-->
              <div id="telecom" class="expertise w3-padding-16" style="display:none">
                  <div class="panel panel-info">
                      <div class="panel-heading w3-xxlarge">Expertise En Télécommunication</div>
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
                  
                  <div class="panel panel-info">
                      <div class="panel-heading w3-xxlarge">Expertise En Multimédia</div>
                      <div class="w3-hide-large"><img src="{{asset('storage/images/multimedia02.jpg')}}" alt="solaire" style="width:100%; height:100%;"></div>
                      <div class="panel-content">
                          <div class="row">
                              <div class="col-sm-7">
                                  <p class="w3-padding-16 w3-container w3-xlarge">
                                    Conscient de l'importance stratégique que revêt le multimedia au sein d'une organisation, LSG met un accent 
                                    particulier sur le metier du multimedia, c'est pourquoi d'ailleurs il a dedié une équipe qui se consacre à
                                    plein temps au developpement et à l'entretien de ses sites d'information, de l'elearning et de l'ecommerce. 
                                  </p>
                              </div>
                              <div class="col-sm-5"><img src="{{asset('storage/images/multimedia02.jpg')}}" alt="solaire" style="width:100%; height:100%;"></div>
                          </div>                         
                      </div>                      
                  </div>
              </div>

              <!--informatique expertise page-->
              <div id="informatic" class="expertise w3-padding-16" style="display:none">
                <div class="panel panel-info">
                    <div class="panel-heading w3-xxlarge">Expertise En Système d'Information (IS)</div>
                      <div class="w3-hide-large"><img src="{{asset('storage/images/numeric03.jpg')}}" alt="solaire" style="width:100%; height:100%;"></div>
                      <div class="panel-content">
                          <div class="row">
                              <div class="col-sm-7">
                                  <p class="w3-padding-16 w3-container w3-xlarge">
                                    Le Système d'Information (ou IS pour Information System) est le nerf des entités d'une organisation. 
                                    A cet effet, des ingénieurs sont mobilisés au sein de LSG  pour fournir aux clients l'ensemble des ressources 
                                    organisées pour la collecte, le stockage, le traitement et la communication de leurs informations. 
                                    Le système d'information coordonne, grâce à la structuration des échanges, les activités d'une organisation 
                                    et lui permet ainsi, d'atteindre ses objectifs.
                                  </p>
                              </div>
                              <div class="col-sm-5"><img src="{{asset('storage/images/numeric03.jpg')}}" alt="solaire" style="width:100%; height:100%;"></div>
                          </div>                         
                      </div>                      
                  </div>
                  
                  <div class="panel panel-info">
                      <div class="panel-heading w3-xxlarge">Expertise En Technologies Informatiques (IT)</div>
                      <div class="w3-hide-large"><img src="{{asset('storage/images/telecom03.jpg')}}" alt="solaire" style="width:100%; height:100%;"></div>
                      <div class="panel-content">
                          <div class="row">
                              <div class="col-sm-7">
                                  <p class="w3-padding-16 w3-container w3-xlarge">
                                     Les technologies de l'information (ou IT pour Information Technology) désignent l'usage des ordinateurs, 
                                     du stockage, des réseaux et des appareils, des infrastructures et des processus pour créer, traiter, stocker, 
                                     sécuriser et échanger toutes sortes de données électroniques. Donc l'IT qui est l'un des principaux domaines
                                     d'expertise de LSG est le vehicule du Système d'Information.
                                  </p>          
                              </div>
                              <div class="col-sm-5"><img src="{{asset('storage/images/telecom03.jpg')}}" alt="solaire" style="width:100%; height:100%;"></div>
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
                            Energies
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
            <div id="exp_ind" class="panel-heading w3-black eltlink" style="opacity: 0.85">
              <div class="panel-title w3-large">
                <div class="row">
                  <div class="col-xs-2"><i id="exp_caret2" class="exp_caret fa fa-plus-square"></i></div>
                    <div class="col-xs-10 ">
                        <a class="w3-text-white" data-toggle="collapse" data-parent="#accordion" href="#exp_col2" 
                           onclick="w3.removeClass('.eltlink','w3-red'); w3.addClass('.eltlink','w3-black'); 
                               w3.toggleClass('#exp_ind', 'w3-black', 'w3-red'); 
                               w3.removeClass('.exp_caret','fa-minus-square'); w3.addClass('.exp_caret','fa-plus-square')
                               w3.toggleClass('#exp_caret2', 'fa-minus-square', 'fa-plus-square');
                               
                           ">
                            Industries
                        </a>
                    </div>
                </div>
              </div>
            </div>
            <div id="exp_col2" class="panel-collapse collapse">
              <img src="{{asset('storage/images/industry03.jpg')}}" alt="industrie" style="width:100%; height:100%;">
              <div class="panel-body w3-large w3-text-black">
                  A l'air de la mondialisation, l'industrialisation d'un pays est indispensable afin de maintenir ou d'augmenter 
                  sa croissance économique. C'est à cet effet que LSG a mis en place une équipe compétente d'ingénieurs et de techniciens, 
                  capable de mener à terme un projet d'industrialisation en passant par toutes les phases et ceux grace à 
                  la forte connaissance des processus metiers.
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
                           Ingénierie
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
                            Travaux
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
                            Télécommunication
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
            
          <div class="panel panel-default">
            <div id="exp_mul" class="panel-heading w3-black eltlink" style="opacity: 0.85">
              <div class="panel-title w3-large">
                <div class="row">
                  <div class="col-xs-2"><i id="exp_caret6" class="exp_caret fa fa-plus-square"></i></div>
                    <div class="col-xs-10 ">
                        <a class="w3-text-white" data-toggle="collapse" data-parent="#accordion" href="#exp_col6" 
                           onclick="w3.removeClass('.eltlink','w3-red'); w3.addClass('.eltlink','w3-black'); 
                               w3.toggleClass('#exp_mul', 'w3-black', 'w3-red'); w3.removeClass('.exp_caret','fa-minus-square'); 
                               w3.addClass('.exp_caret','fa-plus-square'); w3.toggleClass('#exp_caret6', 'fa-minus-square', 'fa-plus-square');                              
                           ">
                            Multimédia
                        </a>
                    </div>
                </div>
              </div>
            </div>
            <div id="exp_col6" class="panel-collapse collapse">
              <img src="{{asset('storage/images/multimedia02.jpg')}}" alt="travaux" style="width:100%; height:100%;">
              <div class="panel-body w3-large w3-text-black">
                  Conscient de l'importance stratégique que revêt le multimedia au sein d'une organisation, LSG met un accent 
                  particulier sur le metier du multimedia, c'est pourquoi d'ailleurs il a dedié une équipe qui se consacre à
                  plein temps au developpement et à l'entretien de ses sites d'information, de l'elearning et de l'ecommerce. 
              </div>
            </div>
          </div>
            
          <div class="panel panel-default">
            <div id="exp_syi" class="panel-heading w3-black eltlink" style="opacity: 0.85">
              <div class="panel-title w3-large">
                <div class="row">
                  <div class="col-xs-2"><i id="exp_caret7" class="exp_caret fa fa-plus-square"></i></div>
                    <div class="col-xs-10 ">
                        <a class="w3-text-white" data-toggle="collapse" data-parent="#accordion" href="#exp_col7" 
                           onclick="w3.removeClass('.eltlink','w3-red'); w3.addClass('.eltlink','w3-black');
                               w3.toggleClass('#exp_syi', 'w3-black', 'w3-red'); w3.removeClass('.exp_caret','fa-minus-square'); 
                               w3.addClass('.exp_caret','fa-plus-square'); w3.toggleClass('#exp_caret7', 'fa-minus-square', 'fa-plus-square');                     
                           ">
                            Système d'Information (IS)
                        </a>
                    </div>
                </div>
              </div>
            </div>
            <div id="exp_col7" class="panel-collapse collapse">
              <img src="{{asset('storage/images/numeric03.jpg')}}" alt="travaux" style="width:100%; height:100%;">
              <div class="panel-body w3-large w3-text-black">
                 Le Système d'Information (ou IS pour Information System) est le nerf des entités d'une organisation. 
                 A cet effet, des ingénieurs sont mobilisés au sein de LSG  pour fournir aux clients l'ensemble des ressources 
                 organisées pour la collecte, le stockage, le traitement et la communication de leurs informations. 
                 Le système d'information coordonne, grâce à la structuration des échanges, les activités d'une organisation 
                 et lui permet ainsi, d'atteindre ses objectifs. 
              </div>
            </div>
          </div>
            
          <div class="panel panel-default">
            <div id="exp_tec" class="panel-heading w3-red eltlink" style="opacity: 0.85">
              <div class="panel-title w3-large">
                <div class="row">
                  <div class="col-xs-2"><i id="exp_caret8" class="exp_caret fa fa-minus-square"></i></div>
                    <div class="col-xs-10 ">
                        <a class="w3-text-white" data-toggle="collapse" data-parent="#accordion" href="#exp_col8" 
                           onclick="w3.removeClass('.eltlink','w3-red'); w3.addClass('.eltlink','w3-black'); 
                               w3.toggleClass('#exp_tec', 'w3-black', 'w3-red'); w3.removeClass('.exp_caret','fa-minus-square'); 
                               w3.addClass('.exp_caret','fa-plus-square'); w3.toggleClass('#exp_caret8', 'fa-minus-square', 'fa-plus-square');                              
                           ">
                            Technologies Informatiques (IT)
                        </a>
                    </div>
                </div>
              </div>
            </div>
            <div id="exp_col8" class="panel-collapse collapse in">
              <img src="{{asset('storage/images/telecom03.jpg')}}" alt="IT" style="width:100%; height:100%;">
              <div class="panel-body w3-large w3-text-black">
                 Les technologies de l'information (ou IT pour Information Technology) désignent l'usage des ordinateurs, 
                 du stockage, des réseaux et des appareils, des infrastructures et des processus pour créer, traiter, stocker, 
                 sécuriser et échanger toutes sortes de données électroniques. Donc l'IT qui est l'un des principaux domaines
                 d'expertise de LSG est le vehicule du Système d'Information.
              </div>
            </div>
          </div>
        </div>
    </div>   
           
@stop
