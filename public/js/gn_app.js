/*jquery instruction and function*/

// expertise section slider function
/*$(document).ready(function(){
    $("#exp_enr").on("click", function(){
        $(this).toggleClass("w3-black w3-red");
        $("#exp_tec").addClass("w3-black").removeClass("w3-red");
    });
});*/

/*javascript function*/

// Toggle Show Element function by Id
function showPannel(id) {
    var pannelId=document.getElementById(id);
    if (pannelId.style.display === 'block') {
        pannelId.style.display = 'none';
    } else{
        pannelId.style.display = 'block';
    }
}

// Hide Element function by Id
function hidePannel(id) {
    var pannelId=document.getElementById(id);
    pannelId.style.display = "none";
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

//Display tabs content and change link class script
function openTabs(evt, tabName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("expertise");
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
          tablinks[i].className = tablinks[i].className.replace("w3-red", "");
      }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " w3-red";
}

//open page function
    function openpage(page){
        location.assign(page);
    }

/*w3.js instruction and function*/

//get main menu data and it into get_menu_data function
w3.getHttpObject("js/json/mainmenu.json", get_menu_data);

// get_menu_data function for displaying menu data
function get_menu_data(myObject) {
  w3.displayObject("mainmenu1", myObject);
  w3.displayObject("mainmenu2", myObject);
  w3.displayObject("mainmenu3", myObject);
  w3.displayObject("mainmenu4", myObject);
  w3.displayObject("footmenu1", myObject);
  w3.displayObject("footmenu2", myObject);
  w3.displayObject("footmenu3", myObject);
  w3.displayObject("footmenu4", myObject);
  w3.displayObject("smenu1", myObject);
  w3.displayObject("smenu2", myObject);
  w3.displayObject("smenu3", myObject);
  w3.displayObject("smenu4", myObject);
}
