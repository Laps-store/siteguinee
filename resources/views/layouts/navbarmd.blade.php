 <nav id="navbarmd" class="navbar navbar-default w3-hide-large" style="padding: 0 10px 0 15px; height: 55px">
        <div class="container-fluid row">
            <div class="col-xs-1 col-sm-1" style="padding: 13px 5px 0 0px">
                <a class="w3-text-blue w3-hover-text-red" href="#" onclick="showPannel('appSidebar'); w3.hide('#appsmenu1'); w3.hide('#appsmenu2')"><i class="w3-large fa fa-navicon"></i></a>
            </div>
            <div class="col-xs-1 col-sm-1" style="padding: 10px 0 0 5px">
                <a class="w3-hide-medium" href="#"><img src="{{asset('storage/images/logo.png')}}" style="width:100px; height: 30px"></a> 
                <a class="w3-hide-small" href="#"><img src="{{asset('storage/images/logo.png')}}" style="width:125px; height: 35px"></a>
            </div>

            @if (Auth::guest())
            <div class="col-xs-1 col-sm-1 col-md-1 w3-right" style="padding: 13px 5px 0 0px" >
                <a class="w3-text-blue w3-hover-text-red" href="#" onclick="showPannel('login_modal'); w3.hide('#appSidebar'); w3.hide('#appsmenu1')"><i class="w3-large glyphicon glyphicon-log-in"></i></a>  
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 w3-right" style="padding: 13px 5px 0 0px" >
                <a class="w3-text-blue w3-hover-text-red" href="#" onclick="showPannel('register_modal'); w3.hide('#appSidebar'); w3.hide('#appsmenu1')"><i class="w3-large glyphicon glyphicon-pencil"></i></a>  
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 w3-right" style="padding: 13px 5px 0 0px" >
                <a class="w3-text-blue w3-hover-text-red" href="#" onclick="showPannel('appsmenu1'); w3.hide('#appSidebar'); w3.addStyle('#appsmenu1', 'right', '5px')"><i class="w3-large glyphicon glyphicon-th"></i></a>  
            </div> 
            <div class="col-xs-1 col-sm-1 col-md-1 w3-right w3-hide-medium" style="padding: 13px 5px 0 0px" >
                <a class="w3-text-blue w3-hover-text-red" href="#" onclick="showPannel('app_search'); w3.hide('#appSidebar'); w3.hide('#appsmenu1'); w3.hide('#appsmenu2') "><i class="w3-large fa fa-search"></i></a>     
            </div>
            <!-- medium search box-->
            <div class="col-xs-5 col-sm-5 col-md-5 w3-hide-small w3-right" style="padding: 10px 15px 0 0">
                <form class="form-group">
                    <div class="input-group" >
                        <input type="text" class="form-control" placeholder="Search" onkeyup="showResult(this.value, 'livesearch2')">
                        <div class="input-group-btn">
                          <button class="btn btn-primary" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
                    </div>
                    <div id="livesearch2" class="w3-bar w3-bar-block w3-white"></div>
                </form>    
            </div>
            
            @else
            <div class="col-xs-1 col-sm-1 w3-right" style="padding: 15px 15px 0 0px" >
                <a class="w3-text-blue w3-hover-text-red" href="#" onclick="showPannel('appsmenu2'); w3.hide('#appSidebar'); w3.hide('#appsmenu1') "><i class="w3-large fa fa-user-circle "></i></a>  
            </div>
            <div class="col-xs-1 col-sm-1 w3-right" style="padding: 15px 15px 0 0px" >
                <a class="w3-text-blue w3-hover-text-red" href="#" onclick="showPannel('appsmenu1'); w3.hide('#appSidebar'); w3.hide('#appsmenu2'); w3.addStyle('#appsmenu1', 'right', '5px')"><i class="w3-large glyphicon glyphicon-th"></i></a>  
            </div> 
            <div class="col-xs-1 col-sm-1 w3-right w3-hide-medium" style="padding: 15px 15px 0 0px" >
                <a class="w3-text-blue w3-hover-text-red" href="#" onclick="showPannel('app_search')"><i class="w3-large fa fa-search"></i></a>  
            </div> 
            <!-- medium search box-->
            <div class="col-xs-6 col-sm-6 w3-hide-small w3-right" style="padding: 13px 15px 0 0">
                <form class="form-group">
                    <div class="input-group" >
                        <input type="text" class="form-control" placeholder="Search" onkeyup="showResult(this.value, 'livesearch3')">
                        <div class="input-group-btn">
                          <button class="btn btn-primary" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
                    </div>
                    <div id="livesearch3" class="w3-bar w3-bar-block w3-white"></div>
                </form>                 
            </div>

            @endif                       
     </div>  
 </nav>

<!-- search box for small screen-->
    <nav id="app_search" class="navbar navbar-default w3-hide-large" style="display: none; position: absolute; top:0px; height: 55px">
        <div class="container-fluid row">
            <div class="col-xs-2 col-sm-2" style="padding: 13px 0 0 10px">
                <a class="w3-text-black" href="#" onclick="w3.hide('#app_search')"><i class="glyphicon glyphicon-arrow-left"></i></a>
            </div>
            <div class="col-xs-10 col-sm-10" style="padding: 10px 10px 0 0" >
               <form class="form-group">
                    <div class="input-group" >
                        <input type="text" class="form-control" placeholder="Search" onkeyup="showResult(this.value, 'livesearch4')">
                        <div class="input-group-btn">
                          <button class="btn btn-primary" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
                    </div>
                    <div id="livesearch4" class="w3-bar w3-bar-block w3-white"></div>
                </form>  
            </div>
        </div>
    </nav>
      

    