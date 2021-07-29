     <?php
      session_start();



      $username=$_SESSION['un'];
      $dp=$_SESSION['dp'];
       $co=mysqli_connect("localhost","root","","test1","3307");
        $sql=$co->query("SELECT coverpic from info where username='$username' ;");

        while($ro = $sql->fetch_assoc())
{
 
  $cover=$ro['coverpic'];
  

}


      $username=$_SESSION['un'];
      $dp=$_SESSION['dp'];
      $fn=$_SESSION['fn'];
      $ln=$_SESSION['ln'];
      $email=$_SESSION['email'];
      $phone=$_SESSION['phone'];
      $name=$_SESSION['name'];
      $date=$_SESSION['date'];


        $con=mysqli_connect("localhost","root","","test1");
        
      
       
       
        ?>
      
<html>
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.containerrr {
  margin-left: 150px;
  margin-right: 150px;
  border-radius: 5px;
  background-color: #6e6e75;
  padding: 20px;
}

.coll-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.coll-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.rowww{
  margin-left: 280px;
}
.rowww:after {
  content: "";
  display: table;
  clear: both;
}
.button {
  width:100%;
  float: right;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 6px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .coll-25, .coll-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
} 
.avatarr {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
.snav{
  position: fixed;
  
}
.snav a
{
 margin-bottom: 35px;
 text-align: center;
 font-size: 22px;
 

}
.snav a:hover
{
  text-decoration:none ;
  background-color: #333336;
}
body{
  background-color:#7d7d82;
}
.card img{
  border:-2px;
  padding:0px;
}
.avatar {
  vertical-align: middle;
  width: 49px;
  height: 50px;
  border-radius: 50%;
}
.column {
  float: left;
  width: 30.33%;
  padding: 7px;
  padding-left: 25px;
  overflow-x: visible;
}
.center {
  margin: auto;
  width: 60%;
  padding: 10px;
  padding-left: 520px;
  padding-right: 0px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
span{
  font-size: 15;
}
</style>

</head>
<body>
  
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#" style="letter-spacing: 4px;">MISSIVE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="feed.php"><i  style="font-size:30px; position: fixed ;top:10px;right:400px;" class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="message.php"><i style="font-size:30px; position: fixed ;top:10px;right:300px;" class="fa">&#xf086;</i></a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="viewstatus.php"><i style="font-size:30px; position: fixed ;top:11px;right:200px;" class="fa">&#xf110;</i></a>
      </li>
      
   
  </div>
</nav> 


 <div class="snav" >
  <div class="w3-sidebar  w3-bar-block" style="width:4%;margin-top:-2px;margin-left: 0px; background-color:#57575c;color:black"><br><br><br>

  <a href="#" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf2bd;</i></a>
  <a href="myuploads.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf03e;</i></a>
  <a href="addpost.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf055;</i></a>
  <a href="addstatus.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf093;</i></a>
  <a href="mcount.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf0a1;</i></a>
  <a href="message.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf1d8;</i></a>
  
  <a href="webcam.html" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf030;</i></a>
  <a href="index.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf1b0;</i></a>
  <a href="login.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf011;</i></a>
  </div>
</div>
 
  
    <?php

      $username=$_SESSION['un'];
      $dp=$_SESSION['dp'];
     
    echo "<center><img src='$cover' style='padding-top: 0px;width: 1000px;height: 400px; border-radius: 5px;''><br>
    <img src='$dp' alt='Avatar' class='avatarr' style='margin-top: -90px;border: 3px black solid;'><a href='index.php'><i style='font-size:24px;margin-left: -25px; background-color: #7d7d82;' class='fa'>&#xf030;</i></a>
    <h1 style='text-align: center; color:white;font-weight: 780;'>$username</h1><br>
    <div class='rowww'>
      <a href=''><div class='coll-25' style='font-size: 18; background-color:#5d6569; height: 30px;''>MyProfile</div></a>
      <a href='Gallery.php'><div class='coll-25' style='font-size: 18;'>Gallery</div></a>
      <a href='editprofile.php'><div class='coll-25' style='font-size: 18;'>Edit Profile</div></a>
    </div>
    <center>
    <hr style='width: 65%; margin-top:5px;'>
    </center>
  </center>";





      ?>
      <div class="containerrr">
   



  <form action="/action_page.php">
    
    <div class="rowww">
      <div class="coll-25">
        <label for="fname">NAME</label>
      </div>
      <div class="coll-75">
        <input type="text" id="fname" name="firstname" value=<?php echo "$name" ?> readonly>
      </div>
    </div>
    
    <div class="rowww">
      <div class="coll-25">
        <label for="fname">EMAIL</label>
      </div>
      <div class="coll-75">
        <input type="text" id="fname" name="firstname" value="<?php echo "$email" ?>" readonly>
      </div>
    </div>
    <div class="rowww">
      <div class="coll-25">
        <label for="lname">MOBILE NO</label>
      </div>
      <div class="coll-75">
        <input type="text" id="lname" name="lastname" value="<?php echo "$phone"; ?>" readonly>
      </div>
    </div>
    <div class="rowww">
      <div class="coll-25">
        <label for="lname">REGIS.DATE</label>
      </div>
      <div class="coll-75">
        <input type="text" id="lname" name="lastname" value=<?php echo "$date" ?> readonly>
      </div>
    </div>
  
    
  </form>
</div>
    
<br><br><br>



</body>
</html>