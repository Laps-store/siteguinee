 <nav id="appSidebar" class="w3-light-grey w3-sidebar w3-bar-block w3-card-2 w3-animate-left w3-hide-large w3-border" style="display: none; width: 250px; z-index:100">
        <div class="w3-bar-item w3-highway-blue">
          <div class="row"> 
              <div class="w3-large col-xs-2">
                  <a onclick="w3.hide('#appSidebar')" class="" href="#"><span class="w3-text-red glyphicon glyphicon-off"></span></a>
              </div>
              
          </div>  
          <div class="row">
              <div class="w3-large">
                  LAPS-STORE GUINEE
              </div>
          </div>
          <div class="row">
              <div class="w3-large col-xs-6">
                <a class=" w3-hover-text-red" href="{{route('login')}}" onclick="w3.hide('#appSidebar'); w3.hide('#appsmenu1')">
                    Connexion
                </a>
              </div>
              
              <div class="w3-large col-xs-6">
                <a class="w3-hover-text-red" href="{{route('register')}}" onclick="w3.hide('#appSidebar'); w3.hide('#appsmenu1')">
                    Inscription
                </a> 
              </div>
          </div>
          
        </div>
        <a href="#t" onclick="w3.toggleShow('#smenu1'); w3.toggleClass('#caret1','glyphicon-chevron-up','glyphicon-chevron-down')" class="w3-bar-item w3-border-bottom w3-hover-red w3-black">
            SOCIETE<span id="caret1" class="glyphicon glyphicon-chevron-down w3-right"></span>
        </a>
        <div id="smenu1" class="w3-highway-blue" style="display: none">
            <a id="mm11" class="w3-bar-item btn w3-text-white w3-hover-red w3-large" href="/aboutus" onclick="w3.hide('#appSidebar')">
                Qui sommes-nous
            </a>   
            <a id="mm12" class="w3-bar-item btn w3-text-white w3-hover-red w3-large" href="/contact" onclick="w3.hide('#appSidebar')">
                Nous contacter
            </a>
            <a id="mm13" class="w3-bar-item btn w3-text-white w3-hover-red w3-large" href="/news" onclick="w3.hide('#appSidebar')">
                Actalité
            </a>
            <a id="mm14" class="w3-bar-item btn w3-text-white w3-hover-red w3-large" href="/staff" onclick="w3.hide('#appSidebar')">
                Carrières
            </a>
        </div>
       <a href="#" onclick="w3.toggleShow('#smenu2'); w3.toggleClass('#caret2','glyphicon-chevron-up','glyphicon-chevron-down')" class="w3-bar-item w3-border-bottom w3-hover-red w3-black">
           EXPERTISES<span id="caret2" class="glyphicon glyphicon-chevron-down w3-right"></span>
       </a>
       <div id="smenu2" class="w3-highway-blue" style="display: none">
          <a class="w3-bar-item btn w3-text-white w3-hover-red w3-large" href="/expertises" onclick="w3.hide('#appSidebar')">
              Domaines d'expertises
          </a>
       </div>
       <a href="#" onclick="w3.toggleShow('#smenu3'); w3.toggleClass('#caret3','glyphicon-chevron-up','glyphicon-chevron-down')" class="w3-bar-item w3-border-bottom w3-hover-red w3-black">
           SECTEURS<span id="caret3" class="glyphicon glyphicon-chevron-down w3-right"></span>
       </a>
      <div id="smenu3" class="w3-highway-blue" style="display: none">
          <a class="w3-bar-item btn w3-text-white w3-hover-red w3-large" href="/secteurs" onclick="w3.hide('#appSidebar')">
              Secteurs d'activités
          </a>
      </div>
      <a href="#" onclick="w3.toggleClass('#smenu4', 'w3-hide'); w3.toggleClass('#caret4','glyphicon-chevron-up','glyphicon-chevron-down')" class="w3-bar-item w3-border-bottom w3-hover-red w3-black">
          SOLUTIONS<span id="caret4" class="glyphicon glyphicon-chevron-down w3-right"></span>
      </a>
      <div id="smenu4" class="w3-highway-blue w3-hide" >
          <a class="w3-bar-item btn w3-text-white w3-hover-red w3-large" href="/solutions" onclick="w3.hide('#appSidebar')">
              Produits et Services
          </a>
      </div>
     <img src="{{asset('storage/images/energy04.jpg')}}" alt="travaux" style="width:100%; height:300px;">
</nav>
