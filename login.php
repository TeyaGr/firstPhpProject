<?php
session_start();
include("app/app.php");
view('index');

if($_SERVER['REQUEST_METHOD']=="POST"){
$email= filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL) ;
$pass = $_POST['password'];
if(auth($email,$pass)){ 
  $_SESSION['email']=$email;
 redirect('admin.php');
   die();
}else{
  $status = "Please enter valid credentials";
}if ($email==false){
  $status="Please enter a valid email";
}
}
?>


<form action="" method="POST">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control"  name = "email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control"  name="password" id="password">
  </div>
  <br/>
  <input type="submit" class="btn btn-primary" name="login" value='login'></input>
</form>
<div class='row'>
<?php if(isset($status)){
  echo $status;
}?>
</div>