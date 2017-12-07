<?php

$xml= simplexml_load_file("xml/links.xml")or die("Error: file canot be loaded");

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  foreach($xml->children() as $links){
      if(stripos($links->title, $q)===0){          
          if($hint==""){
              $hint="<a class='btn btn-default w3-bar-item w3-hover-light-grey' href='$links->url' target='_blank'>$links->title</a>";
          }else{
              $hint.="<a class='btn btn-default w3-bar-item w3-hover-light-grey' href='$links->url' target='_blank'>$links->title</a>";
          }
      }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response=" Pas de suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;

