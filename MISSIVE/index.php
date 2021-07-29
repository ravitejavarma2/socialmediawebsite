<?php
 session_start();
  $server="localhost";
  $username="root";
  $password="";
  $db="test1";
  $port="3307";
  $con=mysqli_connect($server,$username,$password,$db,$port);
  $_SESSION['ll']=0;
  if(!$con)
  {
    die("connection failed".mysqli_connect);
  }
   $x=isset($_POST['register']);
   echo"_______________________________$x-----------------------------------------------";

if(isset($_POST['sub']))
{
$_SESSION['fn']=$_POST['fn'];
$_SESSION['ln']=$_POST['ln'];

$name=$_POST['fn']." ".$_POST['ln'];
$email=$_POST['em'];
$phone=$_POST['ph'];
$password=$_POST['cp'];
$username=$_POST['un'];
$ans=$_POST['ans'];
$_SESSION['un']=$_POST['un'];
$arr=array();
$resource = $con->query("SELECT username FROM info");




while ( $row = $resource->fetch_assoc() ) 
{
    array_push($arr, "{$row['username']}") ;
}
$resource->free();


if(in_array($username,$arr))
{
  
  echo '  <style type="text/css">
  html {
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  
  border-collapse: collapse;
   font-family: "Trebuchet MS", Helvetica, sans-serif;
 
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;

  transform:translate(-50%, -50%);
}



@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
  body
  {
    align:center;
    margin-left: 300px;
    font-family: helvetica;
  }
    h2
    {
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      margin-bottom: 10px;
    }
    
    #a1
    {
      
      
    width: 120%;

    padding: 30px;
      background: #111845a6;
      box-sizing: border-box;
      border-radius: 6%;
      box-shadow: 0 20px 50px rgb(23, 32, 90);
      border: 2px solid #2a3cad;
      color: white;
      height: 500px;


    }
    input
  {
    width: 109%;
    margin: 11px;
  }
  #submit
  {
    
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 10px;
  transition: 0.25s;
  width: 153px;

  }
  #submit:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
  img
  {
    position: fixed;
    left: 2px;
    border:solid;
     color: #2dbd6e;
    top: 1px;
    box-shadow: 0 20px 50px rgb(23, 32, 90);
border-radius:15%;
  }
  .content
  {
    margin-top: 20px;
  }
  .underline-title {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 3px;
  margin: auto;
  margin-bottom: 28px;
  width: 175px;
}
h1
{
  text-align: center;
  margin-bottom: 5px;
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 3px;
  font-size: 30px;
}
.er{

    
      border-radius: 5%;
      box-shadow: 0 20px 50px rgb(23, 32, 90);
      position: fixed;
      left: 358px;
      top: 85px;
      border-color:red;
      
      


}
.data
{
  margin: 180px;
  width: 50%;
}
a{
  color: yellow;
}
h1
{
  color: red;
}
</style>';
echo '<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<img  src="logo.jpeg" width="110" height="110">
<div class="content">

 
  <div id="a1">
    <div class="data">
    <h1> OPPS !!</h1>
     <h2> THIS USERNAME HAS ALREADY BEEN TAKEN BY OTHER USER...</h2>
     <div class="underline-title"></div> 
     <img class="er" src="opps.jpg" width="170" height="170">

     <a href="main.html">CLICK HERE TO DIRECT BACK TO REGISTRATION PAGE</a>
    </div>
    


';

}
else
{
  $_SESSION['fn']=$_POST['fn'];
$_SESSION['ln']=$_POST['ln'];

$name=$_POST['fn']." ".$_POST['ln'];
$email=$_POST['em'];
$phone=$_POST['ph'];
$password=$_POST['cp'];
$username=$_POST['un'];
$ans=$_POST['ans'];
$_SESSION['un']=$_POST['un'];

  $sql="INSERT INTO `test1`.`info` (`username`, `name`, `email`, `phone`, `password`, `date`,`ans`)  VALUES ('$username','$name','$email','$phone','$password', current_timestamp(),'$ans');";
  if($con->query($sql)==true)
{
  
}
 
  echo '
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  <style>
  html {
  height:100%;
}
.header{
  
  padding:5px;
  text-align: center;
  color:rgb(245, 87, 66);
 font-size:60px;
  margin-left: 450px;
  margin-right: 450px;
  margin-top: 32px;
  /* margin-bottom:-20px; */
}
.but{
  box-shadow: 0px 1px 8px #f57c40;
  background-color:#f57c40;
  color: white;
  margin-top:2px;
  margin-left:300px;
  padding:3px;
    cursor: pointer;
}
.but:hover{
  box-shadow: 0px 1px 18px #f57c40;
}
.choose {
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
    padding:15px;
  font-family: "Raleway SemiBold";
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    padding-left: 90px;
    cursor: pointer;
}
.choose:hover{
  box-shadow: 0px 1px 18px #24c64f;
}
legend{
    width: 70px;
    padding: 2px;
    margin-left: calc(45% - 45px - 2px);
}
body {
  overflow: hidden;
  margin:0;
}
.round{ 
  border-radius:50px;

}
.round:hover{
  transform: scale(1.3);
  cursor: pointer;
}
.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  
  border-collapse: collapse;
   font-family: "Trebuchet MS", Helvetica, sans-serif;
  
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;

  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
    a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#forgot-pass {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: right;
}
#card {
  width: 35%;
    padding: 30px;
      background: #111845a6;
      box-sizing: border-box;
      border-radius: 5%;
      box-shadow: 0 20px 50px rgb(23, 32, 90);
      border: 2px solid #2a3cad;
      color: white;
      margin:auto;

}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  text-align: center;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}

.underline-title {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 200px;
}
body {

  height: 100%;
  margin:0;
  color: #2dbd6e;
  
}
.logo
{
  position: fixed;
    left: 4px;
   
    top: 3px;

  
    border-radius:7px;
}

</style>';
echo '<img class="logo" src="logo.jpeg" width="150" height="50">
  <div class="header">
    <h2>WELCOME TO MISSIVE FAMILY</h2>
    </div>
<br><br><br>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

  <div id="card" >
    <div id="card-content">
      <div id="card-title">
        <h1>UPLOAD AVATAR</h1>
        <div class="underline-title"></div>
      </div>
      
      <form method="post" class="form" action="dp2.php" enctype="multipart/form-data">
          <fieldset>
            <legend>        
                <img height="100" class="round" src="ndp.png">     
        </legend>
        <br>
        <p style="color:gold; text-align: center;">Click Here To Upload Image</p>
        <input class="choose" type="file" name="img">
      </fieldset>
      <input type="submit" name="sub" class="but" value="Next">
      </form>
    </div>
  </div>';
   echo '<script>alert("REGISTERD SUCCESSFUL")</script>';



$con->close();

}

}




else{
    $_SESSION['ll']=1;
    echo '
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  <style>
  html {
  height:100%;
}
.header{
  
  padding:5px;
  text-align: center;
  color:rgb(245, 87, 66);
 font-size:60px;
  margin-left: 450px;
  margin-right: 450px;
  margin-top: 32px;
  /* margin-bottom:-20px; */
}
.but{
  box-shadow: 0px 1px 8px #f57c40;
  background-color:#f57c40;
  color: white;
  margin-top:2px;
  margin-left:300px;
  padding:3px;
    cursor: pointer;
}
.but:hover{
  box-shadow: 0px 1px 18px #f57c40;
}
.choose {
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
    padding:15px;
  font-family: "Raleway SemiBold";
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    padding-left: 90px;
    cursor: pointer;
}
.choose:hover{
  box-shadow: 0px 1px 18px #24c64f;
}
legend{
    width: 70px;
    padding: 2px;
    margin-left: calc(45% - 45px - 2px);
}
body {
  overflow: hidden;
  margin:0;
}
.round{ 
  border-radius:50px;

}
.round:hover{
  transform: scale(1.3);
  cursor: pointer;
}
.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  
  border-collapse: collapse;
   font-family: "Trebuchet MS", Helvetica, sans-serif;
  
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;

  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
    a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#forgot-pass {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: right;
}
#card {
  width: 35%;
    padding: 30px;
      background: #111845a6;
      box-sizing: border-box;
      border-radius: 5%;
      box-shadow: 0 20px 50px rgb(23, 32, 90);
      border: 2px solid #2a3cad;
      color: white;
      margin:auto;

}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  text-align: center;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}

.underline-title {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 200px;
}
body {

  height: 100%;
  margin:0;
  color: #2dbd6e;
  
}
.logo
{
  position: fixed;
    left: 4px;
   
    top: 3px;

  
    border-radius:7px;
}

</style>';
echo '<img class="logo" src="logo.jpeg" width="150" height="50">
  <div class="header">
    <h2>WELCOME TO MISSIVE FAMILY</h2>
    </div>
<br><br><br>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

  <div id="card" >
    <div id="card-content">
      <div id="card-title">
        <h1>UPLOAD AVATAR</h1>
        <div class="underline-title"></div>
      </div>
      
      <form method="post" class="form" action="dp2.php" enctype="multipart/form-data">
          <fieldset>
            <legend>        
                <img height="100" class="round" src="ndp.png">     
        </legend>
        <br>
        <p style="color:gold; text-align: center;">Click Here To Upload Image</p>
        <input class="choose" type="file" name="img">
      </fieldset>
      <input type="submit" name="sub" class="but" value="Next">
      </form>
    </div>
  </div>';
   
}

?>