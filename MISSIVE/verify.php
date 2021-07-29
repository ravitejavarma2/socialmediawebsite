<?php

session_start();
  $server="localhost";
  $username="root";
  $password="";
  $db="test1";
  $port="3307";
  $con=mysqli_connect($server,$username,$password,$db,$port);

  if(!$con)
  {
    die("connection failed".mysqli_connect);
  }
  $username=$_POST['use'];
  $_SESSION['un']=$_POST['use'];
  $answer=$_POST['an'];
  $resource = $con->query("SELECT ans FROM `test1`.`info` where username='$username';");
if(!$resource)
{
   echo $conn->error;
}
$ro=$resource->fetch_assoc();
if("{$ro['ans']}"==$answer)
{
	echo "<script>alert('VERIFICATION SUCCESS !!')</script>";
	echo '<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
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
			
			
		width: 110%;
		padding: 30px;
  		background: #111845a6;
  		box-sizing: border-box;
  		border-radius: 5%;
  		box-shadow: 0 20px 50px rgb(23, 32, 90);
  		border: 2px solid #2a3cad;
  		color: white;


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

     color: #2dbd6e;
    top: 1px;
    
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

</style>"';

echo '
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<img src="top1.jpeg" width="150" height="70">
<div class="content">

 
  <div id="a1">
  	 <h1>REGISTER</h1>
  	 <div class="underline-title"></div> 
  	<table >
		<form  method="POST" action="login.php"  >
		
		<tr>
			<td align="center">SET NEW PASSWORD</td>
			<td><input type="password" id="pass" placeholder="SET YOUR NEW PASSWORD " required="Please fill this field"></td>
		</tr>
		<tr>
			<td align="center">CONFIRM NEW PASSWORD</td>
			<td><input type="password" id="cp" name="cp" placeholder="RE-ENTER THE PASSWORD " required="Please fill this field"></td>
		</tr>
		

	
		
	
		<tr>
			<td>&nbsp</td>
		</tr>
	</table>
		
	<input type="submit" id="submit" name="change" value="CHANGE">
</form><br>

	<br>
	<div class="link"  ><a href="login.php" style="color:#10c254">Already signed up?</a>
	</div>
	</div>
</div>
<script type="text/javascript">
var password = document.getElementById("pass"), confirm_password = document.getElementById("cp");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Dont Match");
  } else {
    confirm_password.setCustomValidity("");';





 echo " }
  
}


password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>";






}
else
{
	echo "<script>alert('VERIFICATION NOT SUCCESSFULL !!')</script>";
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
<img  src="logo.jpg" width="110" height="110">
<div class="content">

 
  <div id="a1">
    <div class="data">
    <h1> OOPS !!</h1>
     <h2> YOU HAVE FAILED IN VERIFICATION PROCESS DUE TO INCORRECT RESPONSE </h2>
     <div class="underline-title"></div> 
     <img class="er" src="opps.jpg" width="170" height="170">

     <a href="login.php">CLICK HERE TO DIRECT BACK TO LOGIN PAGE</a>
    </div>
    


';
	
}






$resource->free();












  ?>