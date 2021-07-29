<?php
session_start();
    $x=false;
    $dp=$_SESSION['dp'];
    $us=$_SESSION['un']; 


 $user= $_SESSION["un"];
 $server="localhost";
  $username="root";
  $password="";
  $db="test1";
  $port="3307";
  $con=mysqli_connect($server,$username,$password,$db,$port);


  if(!$con)
  {
    die("connection failed");
  }
  






$i=200;
 echo "<script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
<script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>";
echo "
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.column {
  float: left;
  width: 30%;
  padding: 0 10px;
}


.row {margin: 0 -5px;}


.row:after {
  content: '';
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
width:100%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  background-color: #f1f1f1;
}
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
</style>

";
echo"	<h1>HELLO"." "."<span style='color:red;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;'>$user</span></h1>";

  $res = $con->query("SELECT  count(message) FROM `test1`.`trans` where frwd='$user' and dt=CURRENT_DATE group by user order by count(message) DESC");
if(!$res)
{
   echo $con->error;
}

while ( $ro = $res->fetch_assoc() ) 
{
	
  
	if($ro['count(message)']>0)
	{
		$x=true;
		break;

	}

   
   



}


if($x==false)
{
	echo" <h3 > You have no new messages for now !!!</h3>";
}








else
{
	echo "<h4>YOUR MESSAGES FOR TODAY !!</h4> ";
	$res->free();

  $resource = $con->query("SELECT user, count(message) FROM `test1`.`trans` where frwd='$user' and dt=CURRENT_DATE group by user order by count(message) DESC");
if(!$resource)
{
   echo $con->error;
}

$i=300;


while ( $row = $resource->fetch_assoc() ) 
{
	
	echo"<h5><form action='message.php' method='POST'>






<div class='card' style='border-radius: 16px;' >
	<div class='row' style='width:60%'>

	  <div class='column'  >
	    <img src='ndp.png' alt='Avatar' class='avatar' width='40px' height='40px'>
	  </div>
	  <div class='column' >
	   <input type='text' name='frwd' value={$row['user']} readonly style='color:red;font-size:20px;border-radius:10px;height:35px;margin-left:18px;margin-top:6px;width:260px'>
	  </div>
	      <div class='column'>
	   <input type='submit'name='submit'  value={$row['count(message)']} style='width:40px;height:40px;border-radius:50%;margin-left:230px;margin-top:4px;padding-top:0px;color:white;background-color:#03fc4e'>
	  </div>
	</div>
</div>


		
		</td></tr>
   
    </form></h5>";
    $i=$i+300;
  
	

   
   



}
}









  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
		  .logo
{
  position: fixed;
    left: 4px;
   
    top: 3px;

  
    border-radius:7px;
}

.home
{position: fixed;
    right: 130px;
    
    top: 13px;
   
border-radius:7px;
padding: 5px;


}
.user
{
  position: fixed;
    right: 20px;
    
    top: 11px;
    
border-radius:7px;
padding: 5px;


}
body{
background-image: url("bad.jpeg");
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

}
i:hover
{
	color: black;
}
h1 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 62px; font-weight: 800; line-height: 72px; margin: 100 0 24px; text-align: center; text-transform: uppercase; }
h3{
	color: #ffffff; font-family: 'Raleway',sans-serif;  font-weight: 800; line-height: 72px; margin: 200 0 24px; text-align: center; text-transform: uppercase;
	 color: white;
  text-shadow: 2px 2px 4px #000000;

}
h4{
	color: #ffffff; font-family: 'Raleway',sans-serif;  font-weight: 800; line-height: 72px; margin: 4 0 24px; text-align: center; text-transform: uppercase;
	 color: white;
  text-shadow: 2px 2px 4px #000000;

}
h5{
	color: #ffffff; font-family: 'Raleway',sans-serif;  font-weight: 800; margin:70 0 24 380px; text-align: center; text-transform: uppercase;
	 color: white;
 width: 50%;

}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.fa:hover {
  color: #35fc12;
}


.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: grey;

}
.snav a
{
 margin-bottom: 30px;
 text-align: center;
 font-size: 20px;
 

}
.snav a:hover
{
  text-decoration:none ;
  background-color: white;
}

	</style>

</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <a class="navbar-brand" href="#"><i style="font-size:24px" class="fa">&#xf124;</i> <span style="letter-spacing: 4px;">MISSIVE</span></a></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="feed.php"><i  style="font-size:30px; position: fixed ;top:8px;right:450px;" class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i style="font-size:30px; position: fixed ;top:8px;right:385px;" class="fa">&#xf086;</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mystatus.php"><i style="font-size:30px; position: fixed ;top:10px;right:320px;" class="fa">&#xf110;</i></a>
      </li>
    </ul>
   
    <span class="navbar-text" style="position:fixed;top:4px;right:28px">
      <?php echo " <img src='$dp' alt='Avatar' class='center zoom avatar' style='width:40px; height: 40px;position:fixed;top:5px;right:80px'>";?>
      <div class="dropdown" style="float:right;">
        <div class="row">

      <div class="column" style="width:2%;">
         
      </div>

      <div class="column">
        <?php echo " <p style='color:white;font-size:19px'> $us</p>";  ?>
      </div>
      
    </div>





   
  <div class="dropdown-content"style="background-color:grey">
  <a href="myprofile.php"style="color:black;">MY PROFILE</a>
  <a href="myuploads.php" style="color:black;">MY UPLOADS</a>
  <a href="#" style="color:white;background-color:#cf534e">LOGOUT</a>
  </div>
</div>
  </div>
</div>
    </span>
  </div>
</nav>

  
  
 
   


</body>
</html>