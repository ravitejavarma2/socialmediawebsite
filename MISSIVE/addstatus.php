<?php 
session_start();
$us=$_SESSION['un'];  
$dp=$_SESSION['dp'];
$x=0;
if(isset($_POST['upload']))
{
  $caption=$_POST['caption'];
  $con=mysqli_connect("localhost","root","","test1","3307");
  $fileDestination="";
        $file=$_FILES['filename'];
        $fileName=$file['name'];
         $fileTmpName=$file['tmp_name'];
          $fileSize=$file['size'];
           $fileError=$file['error'];
            $fileType=$file['type'];
            $fileExt=explode('.',$fileName);
            $fileActualExt=strtolower(end($fileExt));
            $allowed=array('jpg','jpeg','png','pdf');
            if(in_array($fileActualExt,$allowed))
            {
                if($fileError==0)
                {
                    if($fileSize<10000000)
                    {
                        $fileNameNew=uniqid('',true).".".$fileActualExt;
                        $fileDestination="gallery/".$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination );
                               
                    }
                    else
                    {
                        echo "YOUR FILE IS TOO BIG";
                    }
                }

            }
            else
            {
                $fileDestination="NULL";
            }
     $sqlde = "DELETE from status where username='$us'";
     $con->query($sqlde);
   $sql = "INSERT INTO status (username,dp,statusimg,caption,date) VALUES (\"$us\",\"$dp\",\"$fileDestination\",'$caption',current_timestamp())";
   $con->query($sql) ;
    $x=1;
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <title></title>
</head>
<body>
<style type="text/css">
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

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: grey;

}
.head{
  color: black;
  margin-top: 23px;
  margin-left:90px;
}


.cen {
  margin: auto;
  width: 60%;
  padding: 85px;
  padding-left: 520px;
  padding-right: 0px;
}


.k{
  margin-top: -33px;
  margin-left: 500px;
}
.my{
  text-align: center;
  position: fixed;
  left: 550px;
  width: 450px;
  top: 115px;
  padding: 6px;
}
.col{
  float: left;
  width: 18.33%;
  padding: 18px;
  overflow-x: visible;
}

.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}
.boxshadow{
  width: 125%;
  height: 40%;

  margin-left: -300px;
  border-left:auto;
  border-right: auto;
  background: #111845a6;
  box-sizing: border-box;
  border-radius: 5%;
  box-shadow: 0 20px 50px rgb(23, 32, 90);
  border: 2px solid #2a3cad;
  color: white;
}
#submit-btn {
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
body {
  background-image: url("https://i.pinimg.com/originals/cd/eb/d3/cdebd315136a6ef1bc98403d7acc83b2.jpg");
  position:sticky;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
}



.fa:hover {
  color: #35fc12;
}


</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <a class="navbar-brand" href="#"><i style="font-size:24px" class="fa">&#xf124;</i><span style="letter-spacing: 4px;">  MISSIVE</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="feed.php"><i  style="font-size:30px; position: fixed ;top:10px;right:450px;" class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="message.php"><i style="font-size:30px; position: fixed ;top:10px;right:385px;" class="fa">&#xf086;</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewstatus.php"><i style="font-size:30px; position: fixed ;top:12px;right:320px;" class="fa">&#xf110;</i></a>
      </li>
    </ul>
   
    <span class="navbar-text" style="position:fixed;top:4px;right:28px">
      <?php echo " <img src='$dp' alt='Avatar' class='center zoom avatar' style='width:40px; height: 40px;position:fixed;top:5px;right:80px'>";?>
      <div class="dropdown" style="float:right;">
        <div class="row">

      <div class="column" style="width:2%;">
         
      </div>

      <div class="column">
        <?php echo " <p style='color:white;font-size:21px'>$us</p>";  ?>
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
<br><br><br>
<form method="post" action="" enctype="multipart/form-data">
  <div class="cen">
  <div class="container">
    
    <div class="ro">
      <div class="col" style="width:3%;">
        
        <?php
    
    $dp=$_SESSION['dp'];

 
      $us=$_SESSION['un']; 
     echo"<img src='$dp' alt='Avatar' class='k avatar' style='width:50px; height: 50px;position:fixed;top:250px;left:75px'>" ?>
      </div>
      <div class="col">
     
        
      </div>
    </div>

      <h3 class="my" style="color: #FFFFFF;background-color:#3cba5d;font-family: Verdana;border-radius: 16px ">My Status</h3><br>
    <div class="boxshadow">
      <br>
   <?php echo "<h2 class='head' >$us</h2>";  ?>
   <br>
    <label style="padding-left:70px;font-size:30px; ">Caption: </label>
      <input type="text" name="caption" placeholder="ENTER CAPTION"><br>
     
      

      <br><label style="padding-left:70px;font-size:30px; ">Gallery: </label>
      <input type="file" id="myFile" name="filename">
     

      <br><br><br><br>
      <div style="padding-left: 150px;"><input id="submit-btn" type="submit" name="upload" value="UPLOAD" style="background-color:#10c254; border-left: 50px;"/></div><br><br>
    </div>
  </div>
  </div>
  <?php
  if($x==1)
  {
    echo "<script>alert('StatusAdded')</script>";
    $x=0;
  }

  ?>
</form>
</body>
</html>