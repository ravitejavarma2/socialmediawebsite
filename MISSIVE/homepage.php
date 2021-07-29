 <?php
 session_start();
  $server="localhost";
  $username="root";
  $password="";
  $con=mysqli_connect($server,$username,$password);

  if(!$con)
  {
    die("connection failed".mysqli_connect);
  }


$_SESSION['un']=$_POST['un'];
$username=$_POST['un'];

$password=$_POST['cp'];


$resource = $con->query("SELECT username,password FROM `test1`.`info` where username='$username'");
if(!$resource)
{
   echo $con->error;
}

$row = $resource->fetch_assoc();
    if("{$row['username']}"==$username and   "{$row['password']}"==$password)
    {
        
    }
    else
    {
        echo "<script>alert(INCORRECT LOGIN DETAILS)</script>";
    }
$resource->free();
$res = $con->query("SELECT name,dp,phone,email FROM `test1`.`info` where username='$username'");
$ro=$res->fetch_assoc();

$pic=$ro['dp'];
$phone=$ro['phone'];
$email=$ro['email'];
$_SESSION['dp']=$pic;
echo "<style >
  
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.avatar {
  vertical-align: middle;
  width: 160px;
  height: 220px;
  border-radius: 80%;
}
.avt {
  vertical-align: middle;
  width: 40px;
  height: 220px;
  border-radius: 80%;
}
.zoom {
  padding: 50px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.35); 
}
#submit-btn {
  background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: 'Raleway SemiBold', sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 10px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
fieldset{
  border-left:auto;
  border-right: auto;
  background: #111845a6;
  box-sizing: border-box;
  border-radius: 5%;
  box-shadow: 0 20px 50px rgb(23, 32, 90);
  border: 2px solid #2a3cad;
  color: white;
}

body {
  
  background-image: url('https://i.pinimg.com/originals/cd/eb/d3/cdebd315136a6ef1bc98403d7acc83b2.jpg');
  height: 70%;
  margin:0;
  position:sticky;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
}
h3{
  padding-top: 0px;
  border-top: 5px;
  text-align: center;
}
</style>";

echo " <div>
    <fieldset style='width: 20%;' class='center'>
      <legend>'<img src='$pic' alt='Avatar' class='center zoom avatar' style='width:200px; height: 220px'>
      
      </legend>
        <h3>{$_SESSION['un']}</h3>
      <h3>{$phone}</h3>
      <h3>{$email}</h3>

      
      
    </fieldset>
</div>
<div class='container'>
  <div class='row'>

    <div class='col'>
        <fieldset style='width: 20%; float:left; margin-left: 100px;'>
          <legend><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz9Xcn5B7CxS6etOxi-C2Byn4UfIYdP1qt0KxCgC_wJzcKfyPNmxnR9LTobtVq6ppyarc&usqp=CAU'alt='Avatar' class='center zoom avt' style='width:165px; height:140px'></legend><br><br>
          <h3><input id='submit-btn' type='submit' name='chat' value='CHAT' style='background-color:#10c254'/></h3><br><br>
        </fieldset>
    </div>

    <div class='col'>
        <fieldset style='width: 20%; float:left; margin-left: 205px;'>
          <legend><img src='https://image.flaticon.com/icons/png/512/906/906338.png' alt='Avatar' class='center zoom avt'  style='width:165px; height:140px'></legend>
          <form action='feed.php' method='POST'><br><br>
          <h3><input id='submit-btn' type='submit' name='chat' value='VIEW FEED' style='background-color:#10c254'/></h3><br></form>
        </fieldset>
    </div>

    <div class='col'>
        <fieldset style='width: 20%; float:left; margin-left: 200px;'>
          <legend><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa6oKhnyUveGfpCpoJ458-GscFumYaTexdyw&usqp=CAU' alt='Avatar' class='center zoom avt' style='width:165px; height:140px'></legend>
          <form action='addstatus.php' method='POST'>
          <h3><a href='addstatus.php'><input id='submit-btn' type='submit' name='chat' value='MY STATUS' style='background-color:#10c254'/></h3></a></form>
          <form action='viewstatus.html' method='POST'>
          <h3><a href='viewstatus.html'><input id='submit-btn' type='submit' name='chat' value='VIEW STATUS' style='background-color:#10c254'/></h3></a></form>
        </fieldset>
    </div>

  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";






?>


<html>
<head>
<title>Home Page</title>


</head>
<body>


</body>

</html>