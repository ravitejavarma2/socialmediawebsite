<?php
session_start();
    $x=false;
    $dp=$_SESSION['dp'];
    $us=$_SESSION['un']; 
    if(isset($_POST['su']))
         {
         $x=true;   
        $con=mysqli_connect("localhost","root","","test1");
        $username=$_SESSION['un'];
        $title=$_POST['title'];
        $location=$_POST['location'];
        $body=$_POST['body'];
          
        $fileDestination="";
    
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
                        $fileDestination="img/".$fileNameNew;
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
             $sql = "INSERT INTO post (username,title,location,body,img,date,dp) VALUES ('$username','$title','$location','$body','$fileDestination',current_timestamp(),'$dp')";
                        if ($con->query($sql) === TRUE) {
                          
                        }
                        else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                        }


             }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>post</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <style>
        .home{
            margin-left: 1225px;
            padding: 15px;
            background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #24c64f;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            position: relative;
            top: 62px;
        }
        .des>h5{
            color:blue;
        }
        body{
            margin:0;
        }
        .snav{
            position: fixed;
            padding: 3px;
            top: 80px;
            z-index: 1;
            left:0;
            overflow-x:hidden;
            height:790px;
            display: inline;
            float: left;
            background-color:#488A99;
            color:white;
            width:230px;
            
        }

.snav ul li a
{
  position:relative;
  display:block;
  width:100%;
  display:flex;
  text-decoration: none;
  color:#fff;

}

.snav ul li a .icon
{
  position: relative;
  display: block;
  min-width: 10px;
  height:50px;
  line-height: 60px;
  text-align:center;

}
.snav ul li a .icon ion-icon{
  font-size: 2em;
}

.snav ul li
{
  padding-left:15% ;

  margin-left: -30px;
  margin-top: 40px;
  position: relative;
  list-style: none;
  width: 100%;
  border-top-left-radius:20px;
  border-bottom-left-radius:20px;

}

.snav ul li.active
{
  background:white;
}
.snav ul li.active a
{
 color:#333;
}

        .des{
            color:crimson;
            border-radius: 10px;
            padding: 20px;
            background-color: #f2f2f2;
            display: inline;
            border:2px solid red;
            position:absolute;
            margin-top:30px;
            left:26%;
            width: 725px;
        }
              .tnav{
            position: fixed;
            overflow: hidden;
            margin:0;
            height: 80px;
            width: 100%;
            background-color:#1C4E80;
            color: white;
            justify-content: space-between;
        }
      .tnav>img{
            border: 2px solid red;
            margin-left: 15px;
            margin-top:2px;
            float: left;
            /* margin: 10px; */
            /* margin-bottom: -10px; */
        }
 .title{
   font-size: 25px;
}
        input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        #submit {
            background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #24c64f;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: auto;
            position: relative;
            left:260px;

            margin-top: 30px;
            transition: 0.25s;
            width: 153px;
            }
            #submit:hover {
            box-shadow: 0px 1px 18px #24c64f;
            }
            .tnav a {
              float: left;
              color: #f2f2f2;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              margin-top: 10px;
              font-size: 22px;
              display: flex;
            }
            .navbar-right{
              margin-left: 70%;
            }

            .tnav a:hover {
              background-color: #ddd;
              color: black;
            }

            .tnav a.active {
              background-color: #04AA6D;
              color: white;
            }
            .tnav a.logout {
              background-color: #d45959;
              color: white;
            }
                i{
      padding-top: 7px;
      padding-right:6px;
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
.fa:hover {
  color: #35fc12;
}


.snav a:hover
{
  text-decoration:none ;
  background-color: #333336;
}
    </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <a class="navbar-brand" href="#"><i style="font-size:24px;" class="fa">&#xf124;</i><span style="letter-spacing: 4px;">  MISSIVE</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="feed.php"><i  style="font-size:30px; position: fixed ;top:7px;right:450px;" class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="message.php"><i style="font-size:30px; position: fixed ;top:7px;right:385px;" class="fa">&#xf086;</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewstatus.php"><i style="font-size:30px; position: fixed ;top:9px;right:320px;" class="fa">&#xf110;</i></a>
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
  <a href="login.php" style="color:white;background-color:#cf534e">LOGOUT</a>
  </div>
</div>
  </div>
</div>
    </span>
  </div>
</nav>





  <!-- <div class="tnav" >
        <img class="logo" src="logo.jpg" height="75" width="75">
      <div class="navbar-right">
        <a  href="#"><i class="fa fa-fw fa-home"></i> Home</a>
       
        <a class="logout" href="#" ><i  class="fa fa-sign-out"></i>Logout</a>
      </div>
    </div>-->
    <div class="snav" >
      <div class="w3-sidebar  w3-bar-block" style="width:15%;margin-top:-26px;margin-left: -3px; background-color:#848487;color:black">

  <a href="myprofile.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf2bd;</i>My Profile</a>
  <a href="myuploads.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf03e;</i>My Uploads</a>
  <a href="addpost.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf055;</i>Add Posts</a>
  <a href="addstatus.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf093;</i>Add Status</a>
  <a href="mcount.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf0a1;</i>Notifications</a>
  <a href="message.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf1d8;</i>Chat</a>
  
  <a href="webcam.html" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf030;</i>Camera</a>
  <a href="changedp.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf1b0;</i>Change DP</a>
  <a href="login.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf011;</i>LogOut</a>
</div>
        
         <!-- <ul>
     <li><h1 style="padding-left:20px;padding-bottom: 20px;color:white"><em>Menu</em></h1></li>
        <li class="list active">
          <a href="#">
            <span class="icon" ><ion-icon name="albums-outline"></ion-icon></span>
            <span class="title" id="feed">Feed</span>
          </a>
        </li>
        <li class="list">
          <a href="profile.php">
            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
            <span class="title">Myprofile</span>
          </a>
        </li>
         <li class="list">
          <a href="addpost.php">
            <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
            <span class="title">Add post</span>
          </a>
        </li>

      </ul>
         -->
    </div> 
    <br>
    <br><br><br>
    <h3 class="heading" style="color: #FFFFFF;background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);margin-right: auto;margin-left:60px;text-align: center;width: 50%;font-family: Verdana;padding: 5px;border-radius: 6px;margin: auto; ">ADD POST</h3>
    <div class="des">
        
    <form  action="" method="post" enctype="multipart/form-data">

        <h3>Title</h3>
        <input type="text" name="title">
        <h3>Location</h3>
        <input type="text" name="location">
        <h3>Body</h3>
        <input type="text" name="body">
        <h3>upload image</h3>
        <input type="file" name="img">
         
        <br>
        <br>
        <input id="submit" type="submit" name="su" value="Post">
    </form>
    </div>
    <?php
        if($x==true)
        {
            echo "<script>alert('POSTED SUCCESSFULLY')</script>";
            $x==false;
        }
    ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>