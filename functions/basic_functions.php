<?php

function view($name){
    
    require("views/$name.view.php");
}



function getG($model){
  global $model;  
}

function output($arr){
  print_r($arr);
}
function redirect($url){
  header("Location:$url");
}

function auth($email,$pass){
if($email==USER_NAME && $pass==PASS){
  return true;
} 

}
function user_authenticated(){
  return isset($_SESSION['email']);
}
function ensure_user_is_auth(){
  if(!user_authenticated()){
redirect("login.php");
  }
}


?>