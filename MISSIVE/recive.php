
<?php
 session_start();
$arr=array();
$p=array();










$server="localhost";
  $username="root";
  $password="";
  $con=mysqli_connect($server,$username,$password);

  if(!$con)
  {
    die("connection failed".mysqli_connect);
  }



$user= $_SESSION["un"];






$result = "SELECT user,message,dt,tim,frwd FROM `test1`.`trans` where (user='$user'and frwd='$frwd')or(user='$frwd' and frwd='$user')order by dt and tim";



      
      
        $a=$con->query($result);
   
        

        
        echo "<br><br><br>";
        echo "<script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
<script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>";


          echo "<div style='width:200%;color:white;position:fixed;background-color:green; top:77px;left:0px;height:50px;font-size:25px;padding-left:40px;padding-top:7px'><ion-icon name='person'></ion-icon>$frwd</div>";
        while($row = $a->fetch_assoc()) 
        { 

         


            $username=$row["user"];
            $x=$row["message"];
            $dt=$row["dt"];
            $tim=$row["tim"];
           

           
            if($username==$user )
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


            
            if($username==$frwd)
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    margin-bottom: 5px;
    width: 500px;
     position: fixed;
     top: 670px;
     left: 500px;
     border-radius: 7px;
     height: 30px;

  }
  #sub{
    
    position: fixed;
    
    top: 700px;
    right: 5px;
    height: 39px;
    margin-top: 5px;
    width: 70px;
    border-radius: 7px;
  
    
  }
  #un
  {
    position: fixed;
    width: 1420px;
    top: 700px;
    left: 20px;
    height:40px;
    margin-top: 5px;
    border-radius: 7px;
  }
  .fi
  {
    position: fixed;
     top: 15px;
    left: 1020px;
    border-radius: 7px;
    

  }








  .gi
  {
    position: fixed;
    top: 15px;
    left: 1250px;
    border-radius: 7px;
  }
  .upe
  {
    width: 200%;
    left: 0px;
    background-color:#7e7db8;
    height: 77px;
    position: fixed;
    top: 0px;
    
  
    


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

    

  


    

  </style>
  
</head>


<body>
<div class="upe"><img class="logo" src='logo.jpg' width='67' height='67'>
  </div>
  <div class='home'><a  href="login.html" ><img class="home" src='home.jpg' width='35' height='35'></a></div>
  <div class='home'><a  href="login.html" ><img class="user" src='use.jpg' width='40' height='40'></a>
    
  </div>
  
  <div class="inner"></div>
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
 

  
  <form method="post" class="form" action="message.php">

  
  
      
   
      
        <input id="frwd"   type="text" name="frwd" placeholder="ENTER THE USER NAME TO WHOM YOU WANT TO SEND" required />
      
   <br>
   
      
         <input id="un"  class="mbox" type="text" name="msg" placeholder="hello" required />
        
        
     
         <input id="sub" type="submit" class="msub" name="submit" value="send" style="background-color:#10c254"/>
        
        
      </form><br><br>
     
  




</body>

</html>




