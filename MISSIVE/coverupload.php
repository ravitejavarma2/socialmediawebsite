<?php
session_start();
    $x=false; 
    if(isset($_POST['subm']))
         {
        $dpDestination="";
    
        $file=$_FILES['img'];
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
                        $dpDestination="img/".$fileNameNew;
                        move_uploaded_file($fileTmpName, $dpDestination );
                               
                    }
                    else
                    {
                        echo "YOUR FILE IS TOO BIG";
                    }
                }
            }
            else
            {
                $dpDestination="NULL";
            }
            $server="localhost";
  $username="root";
  $password="";
  $con=mysqli_connect($server,$username,$password);
$user=$_SESSION['un'];
$cover=$dpDestination;

  if(!$con)
  {
    die("connection failed".mysqli_connect);
  }
  
 $sql="update `test1`.`info` SET coverpic='$dpDestination' WHERE username='"."$user"."'";
 if($con->query($sql)==true)
{
  
}
else
{
  echo  $con->error;
}
$con->close();
             }
             else
             {

             }


    ?>

<!DOCTYPE html>
<html>
<head>
  <title>DP Upload</title>
  <style>
  html {
  height:100%;
}
.header{
  border-radius: 20px;
  padding:5px;
  text-align: center;
  color:orange;
  background-color:maroon;
  margin-left: 450px;
  margin-right: 450px;
  margin-top: 25px;
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


</style>
</head>

<body>
  <img class="logo" src='logo.jpg' width='67' height='67'>
  <div class="header">
    <h2>Welcome to Missive Family</h2>
    </div>
<br><br><br>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

  <div id="card" >
    <div id="card-content">
      <div id="card-title">
        <h1>YOUR AVATAR</h1>
        <div class="underline-title"></div>
      </div>
      <?php
      
      echo "
      <form method='post' action='editprofile.php' class='form' enctype='multipart/form-data'>
          <h3>upload image</h3>
        <input type='file' name='img'>
      <input type='submit' name='subm' class='but' value='upload'>
      </form>
    ";
  
      ?>

    </div>
  </div>
</body>

</html>




 