 <nav id="appSidebar" class="w3-sidebar w3-bar-block w3-black panel panel-default w3-animate-left w3-hide-large w3-border" style="display: none; width: 250px">
    <div class="panel-heading" style="padding-top: 20px">
        <a onclick="w3.hide('#appSidebar')" class="" href="#"><span class="w3-text-blue glyphicon glyphicon-off"></span></a><span class="w3-right w3-text-red w3-large" style="font-weight:bold">Laps-store Guinée</span>   
    </div>
    <a href="#t" onclick="w3.toggleShow('#smenu1'); w3.toggleClass('#caret1','glyphicon-chevron-up','glyphicon-chevron-down')" class="w3-bar-item btn w3-border-bottom w3-hover-red w3-black">RESPOSABILITE SOCIETALE<span id="caret1" class="glyphicon glyphicon-chevron-down w3-right"></span></a>
      <div id="smenu1" class="w3-indigo" style="display: none">
          <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#appSidebar')" w3-repeat="mainmenu1">@{{menuName}}</a>            
      </div>
   <a href="#" onclick="w3.toggleShow('#smenu2'); w3.toggleClass('#caret2','glyphicon-chevron-up','glyphicon-chevron-down')" class="w3-bar-item btn w3-border-bottom w3-hover-red w3-black">EXPERTISES<span id="caret2" class="glyphicon glyphicon-chevron-down w3-right"></span></a>
      <div id="smenu2" class="w3-indigo" style="display: none">
          <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#appSidebar')" w3-repeat="mainmenu2">@{{menuName}}</a>
      </div>
   <a href="#" onclick="w3.toggleShow('#smenu3'); w3.toggleClass('#caret3','glyphicon-chevron-up','glyphicon-chevron-down')" class="w3-bar-item btn w3-border-bottom w3-hover-red w3-black">SECTEURS<span id="caret3" class="glyphicon glyphicon-chevron-down w3-right"></span></a>
      <div id="smenu3" class="w3-indigo" style="display: none">
          <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#appSidebar')" w3-repeat="mainmenu3">@{{menuName}}</a>
      </div>
   <a href="#" onclick="w3.toggleClass('#smenu4', 'w3-hide'); w3.toggleClass('#caret4','glyphicon-chevron-up','glyphicon-chevron-down')" class="w3-bar-item btn w3-border-bottom w3-hover-red w3-black">SOLUTIONS<span id="caret4" class="glyphicon glyphicon-chevron-down w3-right"></span></a>
      <div id="smenu4" class="w3-indigo w3-hide" >
          <a id="@{{id}}" class="@{{class}}" href="@{{href}}" onclick="w3.hide('#appSidebar')" w3-repeat="mainmenu4">@{{menuName}}</a>
      </div>

</nav>