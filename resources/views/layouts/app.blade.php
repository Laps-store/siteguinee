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
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://www.w3schools.com/appml/2.0.3/appml.js"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
      
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | LSG </title>
    
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato"}
        body, html {
            height: 100%;
            line-height: 1.8;
        }
        /* Full height image header */
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("/storage/app/public/appImage/image17001.jpg");
            min-height: 100%;
        }
        .w3-bar .w3-button {
            padding: 16px;
        }
        a:link {      }

        a:visited {      }

        a:hover {
            text-decoration: none;
        }

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
        <footer class="w3-container w3-center w3-black w3-padding-16 w3-topbar w3-border-blue">
          <div id="sitesmenu" class="w3-card-2" style=" opacity: 0.85; width:100%;">
               <div class="w3-row">
                  <div id="footmenu1" class="w3-col l3 w3-bar-block w3-border w3-border-blue w3-bottombar" style="padding: 5px 5px 10px 5px">	 
                     <header class="w3-indigo w3-padding w3-border w3-border-blue"> RESPOSABILITE SOCIETALE </header>
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
            <i class="fa fa-facebook-official w3-hover-opacity w3-text-blue"></i>
            <i class="fa fa-instagram w3-hover-opacity w3-text-red"></i>
            <i class="fa fa-snapchat w3-hover-opacity w3-text-yellow"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity w3-text-yellow"></i>
            <i class="fa fa-twitter w3-hover-opacity w3-text-green"></i>
            <i class="fa fa-linkedin w3-hover-opacity w3-text-blue"></i>
          </div>
          <div class="row">
              <div class="w3-large col-lg-offset-4 col-sm-3">Powered by <a href="https://www.laps-store.com/"  target="_blank" class=" w3-large btn btn-default btn-success">Laps-store Group</a></div>
              <div class="w3-large col-sm-2"> <i class="fa fa-copyright w3-text-blue w3-large" aria-hidden="true"></i> 2016-<?php echo date("Y");?></div>
          </div>
        </footer>
    </div>
 
<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }


// Toggle between showing and hiding the sidebar when clicking the menu icon

    function showPannel(id) {
        var pannelId=document.getElementById(id);
        if (pannelId.style.display === 'block') {
            pannelId.style.display = 'none';
        } else{
            pannelId.style.display = 'block';
        }
    }
 
// Close the sidebar with the close button
    function hidePannel(id) {
        var pannelId=document.getElementById(id);
        pannelId.style.display = "none";
    }

//getting mainmenu data
    w3.getHttpObject("js/json/mainmenu.json", get_menu_data);

    function get_menu_data(myObject) {
      w3.displayObject("mainmenu1", myObject);
      w3.displayObject("mainmenu2", myObject);
      w3.displayObject("mainmenu3", myObject);
      w3.displayObject("mainmenu4", myObject);
      w3.displayObject("footmenu1", myObject);
      w3.displayObject("footmenu2", myObject);
      w3.displayObject("footmenu3", myObject);
      w3.displayObject("footmenu4", myObject);
    }

//live search script
    function showResult(str, id) {
      if (str.length==0) { 
        document.getElementById(id).innerHTML="";
        document.getElementById(id).style.border="0px";
        return;
      }
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById(id).innerHTML=this.responseText;
          document.getElementById(id).style.border="1px solid #A5ACB2";
        }
      }
      xmlhttp.open("GET","livesearch.php?q="+str,true);
      xmlhttp.send();
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
        
  
    
</body>
</html>
