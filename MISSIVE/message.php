
<?php

$arr=array();
$p=array();
session_start();
    $x=false;
    $dp=$_SESSION['dp'];
    $us=$_SESSION['un']; 

if(isset($_POST['sub']))
      {
       
        $server2="localhost";
  $username2="root";
  $password2="";
  $db = "test1";

  $port="3307";
  $ph= $_POST['pho'];

  $co = mysqli_connect($server2,$username2,$password2,$db,$port);

  if(!$co)
  {
    die("connection failed");
  }
  


  $resource = $co->query("SELECT username,name,email FROM `test1`.`info` where phone='$ph'");
   $re = $co->query("SELECT phone FROM `test1`.`info` ");
if(!$resource)
{
   echo $conn->error;
}
while ( $row = $re->fetch_assoc() ) 
{
    array_push($arr, "{$row['phone']}") ;
}

if(in_array($ph,$arr))
{

echo "<div class='pop' style='position:fixed;top:150px;left:550px;color: white;
  '>"."<center><h1><u>HERE ARE THE DETAILS !!</u></h1></center></div>";

while ( $row = $resource->fetch_assoc() ) 
{
    echo "<div class='pp' style='position:fixed;top:270px;left:660px;color: white;
font-size:20px'>"."<b>USERNAME : </b>".$row['username']."<br><br>"."<b>NAME : </b>".$row['name']."<br><br>"."<b>EMAIL : </b>".$row['email'];
   
    
}
}
else
{
  echo "<div style='position:fixed;top:270px;left:600px;color: red;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;font-size:30px'>"."USER DOESNT EXISTS "."</div>";
}
$resource->free();

      }
if(isset($_POST['submit']))
{
session_start();
$arr=array();

  $server1="localhost";
  $username1="root";
  $password1="";
  $db = "test1";

  $port="3307";
  $user1= $_SESSION["un"];

  $conn = mysqli_connect($server1,$username1,$password1,$db,$port);

  if(!$conn)
  {
    die("connection failed");
  }
  


  $resource = $conn->query("SELECT username FROM `test1`.`info`");
if(!$resource)
{
   echo $conn->error;
}




while ( $row = $resource->fetch_assoc() ) 
{
    array_push($arr, "{$row['username']}") ;
}
$resource->free();









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

$msg="";
if(isset($_POST['msg']))
{
  $msg=$_POST['msg'];
}

$frwd=$_POST['frwd'];
$user= $_SESSION["un"];
if($msg!="")
{





if(in_array($frwd,$arr))
{
$sql="INSERT INTO trans (`user`, `frwd`, `message`, `dt`, `tim`) VALUES ('$user', '$frwd','$msg', current_timestamp(),current_timestamp() );";


if($con->query($sql)==true)
{
  
}
else
{
  echo  $con->error;
}

}

else
{
  echo "<script>alert('USER DOESNT EXISTS');</script>";
}
}
else
{

}

$result = "SELECT user,message,dt,tim,frwd FROM `test1`.`trans` where (user='$user'and frwd='$frwd')or(user='$frwd' and frwd='$user')order by dt and tim";



      
      
        $a=$con->query($result);
   
        

        echo "<div></div>";
        echo "<br><br>";
        echo "</div>";
        echo "<br><br><br>";
        echo "<script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
<script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>";

        if(in_array($frwd,$arr))
        {
          echo "<div style='width:200%;color:white;position:fixed;background-color:#86cce3; top:53px;left:0px;height:50px;font-size:25px;padding-left:40px;padding-top:7px;display:flex;color:black;font-family:georgia'><ion-icon name='person'></ion-icon>$frwd</div>";
        }
        while($row = $a->fetch_assoc()) 
        { 

         


            $username=$row["user"];
            $x=$row["message"];
            $dt=$row["dt"];
            $tim=$row["tim"];
           

           
            if($username==$frwd )
            {

            echo "<div style=' position:relative;left:100px;width:450px; margin:35px; padding:10px;box-sizing: border-box;border-radius: 5px;border: 2px solid #2a3cad;background-color:#6fbced;z-index:-1'>";
            echo "<div style='text-align: center; font-size:15px' >$dt</div><hr>";
              $y=explode(" ",$x);
              $z="";
              $b=array();
              $q=array();

               
                if(str_word_count($x)>1)
                {
                      for($i=0;$i<count($y);$i++)
                          {
                              if(strlen($y[$i])>38)
                              {


                                 $m=0;
                                $n=38;
                                $ax="";
             
              
                                while(true)
                                {
                                        $ax=substr($y[$i],$m,38);
                           
                                    array_push($q,$ax);

                                    $m=$n;
                                    $n=$n+38;
             

              
              
                
                if($m>strlen($y[$i]))
                {
                  
                  if(strlen($z)==0)
                  {
                    for($j=0;$j<count($q)-1;$j++)
                    {
                    array_push($b,$q[$j]);
                  }
                  

                  if(strlen($q[count($q)-1])<38)
                  {
                    if((strlen($z)+strlen($q[count($q)-1]))<38)
              {
                $z=$z.$q[count($q)-1]." ";
              }

            else
              {
                array_push($b,$z);
                $z=$q[count($q)-1]." ";

              }
                    
                    
                  }
                  }
                  else
                  {
                    array_push($b,$z);
                    for($j=0;$j<count($q)-1;$j++)
                    {
                    array_push($b,$q[$j]);
                  }
                  $z="";
                  if(strlen($q[count($q)-1])<38)
                  {
                    if((strlen($z)+strlen($q[count($q)-1]))<38)
              {
                $z=$z.$q[count($q)-1]." ";
              }

            else
              {
                array_push($b,$z);
                $z=$q[count($q)-1]." ";

              }
                    
                    
                  }

                  }

                 
                 break;
                }
              
             
            }

                    
            
            $q=[];
             
        

  }
  else{

  
    
    if((strlen($z)+strlen($y[$i]))<38)
    {
      $z=$z.$y[$i]." ";
    }

    else
    {
      array_push($b,$z);
      $z=$y[$i]." ";

    }
            }

  
}

if(strlen($z)<=38)
    {
      


      array_push($b,$z);
    }

}
else
{
  if(strlen($x)>38)
            {
              $m=0;
              $n=38;
              $ax="";
             
              
              while(true)
            {
              $ax=substr($x,$m,38);
                           
              array_push($b,$ax);

              $m=$n;
              $n=$n+38;
             

              
              
                
                if($m>strlen($x))
                {
                  
                 break;
                }
              
             
            }
        }
         else
        {
          array_push($b,$x);
        }
}
for($i=0;$i<count($b);$i++)
{
  echo "<div style='color:black;  font-family: 'Nunito', sans-serif;'>$b[$i]</div>";


}
$y=[];
            $q=[];
            $b=[];
            
            echo "<div style='float:right; position:relative;bottom:10px; font-size:15px;'>$tim</div>";
            

            }
            echo "</div>";


            
            if($username==$user)
            {
              echo "<div style='position:relative;left:900px; width:450px; margin:35px; padding:10px;box-sizing: border-box;border-radius: 5px;border: 2px solid #2a3cad;background-color:#58b666;z-index:-1'>";
            echo "<div style='text-align: center; font-size:15px;' >$dt</div><hr>";
              $y=explode(" ",$x);
              $z="";
              $b=array();
              $q=array();

               
                if(str_word_count($x)>1)
                {
                      for($i=0;$i<count($y);$i++)
                          {
                              if(strlen($y[$i])>38)
                              {


                                 $m=0;
                                $n=38;
                                $ax="";
             
              
                                while(true)
                                {
                                        $ax=substr($y[$i],$m,38);
                           
                                    array_push($q,$ax);

                                    $m=$n;
                                    $n=$n+38;
             

              
              
                
                if($m>strlen($y[$i]))
                {
                  
                  if(strlen($z)==0)
                  {
                    for($j=0;$j<count($q)-1;$j++)
                    {
                    array_push($b,$q[$j]);
                  }
                  

                  if(strlen($q[count($q)-1])<38)
                  {
                    if((strlen($z)+strlen($q[count($q)-1]))<38)
              {
                $z=$z.$q[count($q)-1]." ";
              }

            else
              {
                array_push($b,$z);
                $z=$q[count($q)-1]." ";

              }
                    
                    
                  }
                  }
                  else
                  {
                    array_push($b,$z);
                    for($j=0;$j<count($q)-1;$j++)
                    {
                    array_push($b,$q[$j]);
                  }
                  $z="";
                  if(strlen($q[count($q)-1])<38)
                  {
                    if((strlen($z)+strlen($q[count($q)-1]))<38)
              {
                $z=$z.$q[count($q)-1]." ";
              }

            else
              {
                array_push($b,$z);
                $z=$q[count($q)-1]." ";

              }
                    
                    
                  }

                  }

                 
                 break;
                }
              
             
            }

                    
            
            $q=[];
             
        

  }
  else{

  
    
    if((strlen($z)+strlen($y[$i]))<38)
    {
      $z=$z.$y[$i]." ";
    }

    else
    {
      array_push($b,$z);
      $z=$y[$i]." ";

    }
            }

  
}

if(strlen($z)<=38)
    {
      


      array_push($b,$z);
    }

}
else
{
  if(strlen($x)>38)
            {
              $m=0;
              $n=38;
              $ax="";
             
              
              while(true)
            {
              $ax=substr($x,$m,38);
                           
              array_push($b,$ax);

              $m=$n;
              $n=$n+38;
             

              
              
                
                if($m>strlen($x))
                {
                  
                 break;
                }
              
             
            }
        }
         else
        {
          array_push($b,$x);
        }
}
for($i=0;$i<count($b);$i++)
{
  echo "<div style='color:black;  font-family: 'Nunito', sans-serif; '>$b[$i]</div>";


}
$y=[];
            $q=[];
            $b=[];
            
            echo "<div style='float:right; position:relative;bottom:10px; font-size:15px;'>$tim</div>";
            

            }
            echo "</div>";




           
            
            



}
}


  

?> 



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style type="text/css">

  body
  {
    background-image: url("bad.jpeg");
  }
  
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


  .tp{
     position: fixed;
    left: 2px;
    border:solid;
    top: 1px;
    width: 99.5%;
    height: 95px;
    background-color: green;
    opacity: 0.5;
    z-index: -1;
    border-radius:5px;


  

  }
  .inner
  {
    background-color:#b6b8ad;
    
   
    display: flex;
     position: fixed;
     left: 0px;
     top: 665px;
     height:98px;
     width: 100%;
     border: solid;
     

  }
  #frwd
  {
    
    width: 259px;
     position: fixed;
     bottom: 0px;
     left: 2px;
     border-radius: 7px;
     height: 40px;

  }
  #sub{
    
    position: fixed;
    
    bottom: 0px;
    right: 3px;
    height: 40px;
    
    width: 70px;
    border-radius: 7px;
    color: white;
  
    
  }
  #un
  {
    position: fixed;
    width: 1170px;
    bottom: 0px;
    left: 273px;
    height:40px;
    
    border-radius: 7px;

  }
  .fi
  {
    position: fixed;
     top: 1px;
    left: 485px;
    border-radius: 7px;
    

  }








  .gi
  {
    position: fixed;
    top: 1px;
    left: 700px;
    border-radius: 7px;
  }
  .upe
  {
    width: 200%;
    left: 0px;
    background-color:#1C4E80;
    height: 77px;
    position: fixed;
    top: 0px;
   
    z-index: -1;
  
    


  }
  .uname
  {
    position: fixed;
    right: 25px;
    
    top: 60px;
    font-weight: bolder;
    font-size: 20px;
    color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
.home:hover
{
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.user:hover
{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}




.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}
.ms
{
  position:fixed;top:270px;
    font-family: 'Nunito', sans-serif;
    left: 400px;
    font-size: 25px;


}
.sm

{
  position:fixed;
   top:150px;
   left: 600px;
   color: yellow;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    font-family: 'Nunito', sans-serif;
    font-size: 30px;
}
.frwd:focus
{
  border: solid 2em;
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

  .fa:hover {
  color: #35fc12;
}



    

  </style>
  
</head>


<body>
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
      <li class="nav-item active">
        <a class="nav-link" href="#"><i style="font-size:30px; position: fixed ;top:10px;right:385px;" class="fa">&#xf086;</i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="viewstatus.php"><i style="font-size:30px; position: fixed ;top:12px;right:320px;" class="fa">&#xf110;</i></a>
      </li>
    </ul>
   
    <span class="navbar-text" style="position:fixed;top:4px;right:28px">
      <?php echo " <img src='$dp' alt='Avatar' class='center zoom avatar' style='width:40px; height: 40px;position:fixed;top:5px;right:80px;border-radius:50%'>";?>
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
  <a href="#" style="color:black;">MY UPLOADS</a>
  <a href="#" style="color:white;background-color:#cf534e">LOGOUT</a>
  </div>
</div>
  </div>
</div>
    </span>
  </div>
   <form  action="message.php" method="post" class="fin">
    <div class="topnav">
  
  <div class="search-container">
    
      <input type="text"  class="fi" name="pho" placeholder="Search By Phone Number" >
      <button type="submit" class="gi" name="sub" ><i class="fa fa-search"></i></button>
    
  </div>
</div>


    <!-- <input type="text" class="fi" name="pho"  >

    <input type="submit" value="SUBMIT" class="gi" name="sub"> -->
  </form>
</nav>
  
  
 
 
 

  
  <form method="post" class="form" action="message.php">

  
  
      
   
      
        <input id="frwd"   type="text" name="frwd" placeholder="USENAME" required />
      
   <br>
   
      
         <input id="un"  class="mbox" type="text" name="msg" placeholder="hello" required />
        
        
     <button type="submit" id="sub" class="msub" name="submit" style="background-color:rgb(0,191,255);"><i style="font-size: 20px;color:white;"class="fa fa-paper-plane" aria-hidden="true"></i></button>
         <!-- <button id="sub" type="submit" class="msub" name="submit" value="send" style="background-color:#10c254"/> -->
        
        
      </form><br><br>
     
  




</body>

</html>




