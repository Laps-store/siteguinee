<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gn_app.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
      
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | LSG </title>
    
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato"}
    body, html { height: 100%; line-height: 1.8; }
        /* Full height image header */
    .w3-bar .w3-button { padding: 16px;}
     a:link { text-decoration: none;}
     a:visited { text-decoration: none; }
     a:hover { text-decoration: none; }
     a:active {    } 
    </style>
</head>
<body>
    <div id="app">        
       <!-- nav bar -->
       @includeIf('layouts.navbar')
              
       <!-- Sidebar on small screens when clicking the menu icon -->
       @includeIf('layouts.appSidebar')
        
       <!-- content -->       
       @yield('content')
       
        
<!-- Footer -->
        <!-- large screen content-->
        <footer class="w3-container w3-center w3-black w3-padding-16 w3-topbar w3-border-blue w3-hide-medium w3-hide-small">
          <div id="sitesmenu" class="w3-card-2" style=" opacity: 0.85; width:100%;">
               <div class="w3-row">
                  <div id="footmenu1" class="w3-col l3 w3-bar-block w3-border w3-border-blue w3-bottombar" style="padding: 5px 5px 10px 5px">	 
                     <header class="w3-indigo w3-padding w3-border w3-border-blue"> SOCIETE </header>
                     <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#sitesmenu')" w3-repeat="footmenu1">@{{menuName}}</a>  
                  </div>
                  <div id="footmenu2" class="w3-col l3 w3-bar-block w3-border w3-border-blue w3-bottombar" style="padding: 5px 5px 10px 5px">	   
                      <a href="navbar.blade.php"></a>
                     <header class="w3-indigo w3-padding w3-border w3-border-blue"> EXPERTISES </header>
                     <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#sitesmenu')" w3-repeat="footmenu2">@{{menuName}}</a>  
                  </div>
                  <div id="footmenu3" class="w3-col l3 w3-bar-block w3-border w3-border-blue w3-bottombar" style="padding: 5px 5px 10px 5px">	   
                     <header class="w3-indigo w3-padding w3-border w3-border-blue"> SECTEURS  </header>
                     <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#sitesmenu')" w3-repeat="footmenu3">@{{menuName}}</a>  
                  </div>
                  <div id="footmenu4" class="w3-col l3 w3-bar-block w3-border w3-border-blue w3-bottombar" style="padding: 5px 5px 10px 5px">	   
                     <header class="w3-indigo w3-padding w3-border w3-border-blue"> SOLUTIONS </header>
                     <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#sitesmenu')" w3-repeat="footmenu4">@{{menuName}}</a>  
                  </div>
               </div>
            </div>
          <div class="w3-xlarge w3-section">
            <a href="#"><i class="fa fa-facebook-official w3-hover-opacity w3-text-blue"></i></a>
            <a href="#"><i class="fa fa-instagram w3-hover-opacity w3-text-red"></i></a>
            <a href="#"><i class="fa fa-snapchat w3-hover-opacity w3-text-yellow"></i></a>
            <a href="#"><i class="fa fa-pinterest-p w3-hover-opacity w3-text-yellow"></i></a>
            <a href="#"><i class="fa fa-twitter w3-hover-opacity w3-text-green"></i></a>
            <a href="#"><i class="fa fa-linkedin w3-hover-opacity w3-text-blue"></i></a>
          </div>
          <div class="row">
              <div class="w3-xlarge col-md-offset-3 col-md-2" style="padding-top: 5px">Powered by</div> 
              <div class="col-md-2" style="padding-top: 5px"><a href="https://www.laps-store.com/"  target="_blank" class=" w3-xlarge">Laps-store Group</a></div>
              <div class="w3-xlarge col-sm-2" style="padding-top: 5px"> <i class="fa fa-copyright w3-text-red w3-large" aria-hidden="true"></i> 2016-<?php echo date("Y");?></div>
          </div>
        </footer>
        <!-- small screen content-->
        
        <footer class="w3-hide-large w3-black w3-topbar w3-border-blue" style="padding: 10px 6px 20px 10px">
            <div class="row w3-xlarge">
                <div class="col-xs-2"><a href="#"><i class="fa fa-facebook-official w3-hover-opacity w3-text-red"></i></a></div>
                <div class="col-xs-2"><a href="#"><i class="fa fa-instagram w3-hover-opacity w3-text-red"></i></a></div>
                <div class="col-xs-2"><a href="#"><i class="fa fa-snapchat w3-hover-opacity w3-text-yellow"></i></a></div>
                <div class="col-xs-2"><a href="#"><i class="fa fa-pinterest-p w3-hover-opacity w3-text-yellow"></i></a></div>
                <div class="col-xs-2"><a href="#"><i class="fa fa-twitter w3-hover-opacity w3-text-green"></i></a></div>
                <div class="col-xs-2"><a href="#"><i class="fa fa-linkedin w3-hover-opacity w3-text-green"></i></a></div>
            </div>
            <div class="row">
                <div class="col-xs-4" style="padding-top: 6px">Powered by </div>
                <div class="col-xs-4" style="padding-top: 6px; padding-left: 0"><a href="https://www.laps-store.com/"  target="_blank">Laps-store Group</a></div>
                <div class="col-xs-4" style="padding-top: 6px"> <i class="fa fa-copyright w3-text-green" aria-hidden="true"></i> 2016-<?php echo date("Y");?></div>
            </div>
        </footer>
    </div>  
</body>
</html>
