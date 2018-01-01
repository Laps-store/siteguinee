 <div class="w3-top" style="z-index: 1">            
    <!-- large screen navbar -->
    <nav class="navbar navbar-default w3-hide-small w3-hide-medium w3-border-blue w3-bottombar" style="padding: 0 50px 0 20px; height: 60px">

        <div class="container-fluid row">
            <!--sub menu trigger-->
            <div class="col-xs-1 col-sm-1 w3-center w3-hover-white" style="padding: 10px 0 0 0; margin: 5px 0 0 0">
                <a onclick="showPannel('sitesmenu'); w3.hide('#logout'); w3.hide('#appsmenu1'); w3.hide('#appsmenu2')"><span class="w3-hover-text-red fa fa-navicon w3-xlarge" style="color: #55ACEE"></span></a>  
            </div> 

            <!-- app sub menu-->
            <div id="sitesmenu" class="w3-card-2 w3-black" style=" opacity: 0.85; width:100%; position:absolute;top:55px;left:0;z-index:0; height:auto; display: none">
               <div class="w3-row">
                  <div id="mainmenu1" class="w3-col l3 w3-bar-block w3-border w3-border-blue w3-bottombar" style="padding: 5px 5px 10px 5px">	 
                     <header class="w3-indigo w3-padding w3-border w3-border-blue"> SOCIETE </header>
                     <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#sitesmenu')" w3-repeat="mainmenu1">@{{menuName}}</a>  
                  </div>
                  <div id="mainmenu2" class="w3-col l3 w3-bar-block w3-border w3-border-blue w3-bottombar" style="padding: 5px 5px 10px 5px">	   
                     <header class="w3-indigo w3-padding w3-border w3-border-blue"> EXPERTISES </header>
                     <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#sitesmenu')" w3-repeat="mainmenu2">@{{menuName}}</a>  
                  </div>
                  <div id="mainmenu3" class="w3-col l3 w3-bar-block w3-border w3-border-blue w3-bottombar" style="padding: 5px 5px 10px 5px">	   
                     <header class="w3-indigo w3-padding w3-border w3-border-blue"> SECTEURS  </header>
                     <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#sitesmenu')" w3-repeat="mainmenu3">@{{menuName}}</a>  
                  </div>
                  <div id="mainmenu4" class="w3-col l3 w3-bar-block w3-border w3-border-blue w3-bottombar" style="padding: 5px 5px 10px 5px">	   
                     <header class="w3-indigo w3-padding w3-border w3-border-blue"> SOLUTIONS </header>
                     <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#sitesmenu')" w3-repeat="mainmenu4">@{{menuName}}</a>  
                  </div>
               </div>
            </div>

            <!-- app brand-->
            <div class="col-xs-2 col-sm-2" style="padding: 2px 0 0 0">
                <a class="" href="/"><img src="storage/images/logo.png" style="width:175px; height: 50px"></a> 
            </div>

            <!-- large screen search box-->
            <div class="col-xs-6 col-sm-6" style="padding: 8px 0 0 5px;">                  
                <form class="form-group">
                    <div class="input-group" >
                        <input type="text" class="form-control" placeholder="Search" onkeyup="showResult(this.value, 'livesearch')">
                        <div class="input-group-btn">
                          <button class="btn btn-primary" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
                    </div>
                    <div id="livesearch" class="w3-bar w3-bar-block w3-white" style="width: 594px"></div>
                </form>          
            </div>

            <!-- app auth menu-->
            <div class="col-xs-3 col-sm-3 w3-bar" style="padding: 8px 0 3px 0">   
                @if (Auth::guest())

                    <a id="applogin" href="{{route('login')}}" class="w3-large w3-hover-red btn btn-lg w3-right w3-bar-item w3-text-black" onclick="w3.removeClass('#register', 'w3-red'); w3.hide('#sitesmenu'); w3.hide('#appsmenu1'); w3.hide('#appsmenu2')">
                        Se connecter
                    </a>
                    <a id="appregister" href="{{route('register')}}" class="w3-large w3-hover-red btn btn-lg w3-right w3-bar-item w3-text-black" onclick="w3.removeClass('#login', 'w3-red'); w3.hide('#sitesmenu'); w3.hide('#appsmenu1'); w3.hide('#appsmenu2')">
                        S'inscrire
                    </a>                   
                    <a   style="height: 45px" class="w3-large w3-right w3-bar-item w3-text-black" onclick="showPannel('appsmenu1'); w3.hide('#sitesmenu')">
                        <span class="w3-hover-text-red glyphicon glyphicon-th w3-xlarge" style="color: #55ACEE"></span>
                    </a>                                          
                    @else
                    <a  class="w3-text-blue w3-right w3-bar-item"  onclick="showPannel('appsmenu2'); w3.hide('#appSidebar'); w3.hide('#appsmenu1') ">
                        <i class="w3-hover-text-red w3-xlarge fa fa-user-circle "></i>
                    </a>                   
                    <a  class="w3-right w3-bar-item w3-text-blue" onclick="showPannel('appsmenu1'); w3.hide('#appsmenu2'); w3.hide('#sitesmenu'); w3.addStyle('#appsmenu1', 'right','100px' )">
                        <span class="w3-hover-text-red glyphicon glyphicon-th w3-xlarge" style="color: #55ACEE"></span>
                    </a>                                     
                                           
                @endif                    
            </div>
        </div>
    </nav>

    <!-- application sub menu for large screen-->
    <div id="appsmenu1" class="panel panel-primary" style="display: none; position: absolute; right: 220px; top: 45px; z-index: 1">
        <div class="panel-heading"><h2 class="panel-title">LSG Applis</h2></div>
        <div class="w3-large w3-bar-block w3-white">  
          <a href="#" class="w3-large w3-hover-light-grey w3-bar-item btn w3-text-black" onclick="w3.hide('#appsmenu1');">laps-learning</a>                                     
          <a href="#" class="w3-large w3-hover-light-grey w3-bar-item btn w3-text-black" onclick="w3.hide('#appsmenu1');">laps-news</a>
          <a href="#" class="w3-large w3-hover-light-grey w3-bar-item btn w3-text-black" onclick="w3.hide('#appsmenu1');">laps-market</a> 
        </div>
    </div>
    
    <!--profile sub menu-->
    <div id="appsmenu2" class="panel panel-primary" style="display: none; position: absolute; right: 5px; top: 50px; z-index: 1">
        <div class="panel-heading"><h2 class="panel-title"><i class="w3-xlarge glyphicon glyphicon-user "></i> {{Auth::user()['name']}}</h2></div>
        <div class="w3-bar-block w3-white">                                         
          <a href="{{ route('logout') }}" class="w3-large w3-hover-light-grey w3-bar-item btn w3-text-black" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  se deconnecter </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
          </form>
        </div>
    </div>                    
    
    <!--Nav bar for small screen-->
    @includeIf('layouts.navbarmd')     
</div>

