<?php




 session_start();


      $username=$_SESSION['un']; 
      $dp=$_SESSION['dp'];


 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Feed</title>
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

        body{
            margin:0;
        }
        .snav{
            position: fixed;
            padding: 3px;
            top: 50px;
            z-index: 1;
            left:0;
            overflow-x:hidden;
            height:790px;
            display: inline;
            float: left;
           
            color:white;
            width:219px;
            
        }
       .des{
           background-color: #F1F1F1;
            margin-left: 220px;
            padding-left: 120px;
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
        .high:hover{
            background-color: transparent;
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
        input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
/*table{border:ridge 5px red;}*/
.title{
   font-size: 25px;
}
.inner-body>table,tr,td{
  width: 20%;
  height: 53%;
  border-left:auto;
  border-right: auto;
  box-sizing: border-box;
  border-radius: 5px;
  /*box-shadow: 0 20px 50px rgb(23, 32, 90);*/
  /*border: 2px solid #2a3cad;*/
  color: #bd9666;
  text-align: center;
  background-color:#1A1A1D;
  padding: 3px;
  
}


.inner-body{
  /*border: 2px solid red;*/
  margin-top: -65px;
  font-family: "Lucida Console";
  /*background-color: green;*/
  margin-left: 70px;
  margin-right: 200px;
}
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.username>p{
  text-align: left;
  position: relative;
  border: 2px solid red;
  left: 35px;
  padding-top: 30px;
  color:#edf261;
  font-size: 20px;
  font-family:"sans-serif";

}
.fa {
  font-size: 50px;
  cursor: pointer;
  margin: 0% 2%;
  user-select: none;
}
.row>img{
    margin-top: 20px;
    margin-left: 20px;
    /*border: 2px solid red;*/
}
.row>p{
  /*border: 2px solid red;*/
  margin-top: 33px;
  margin-left: 5px;
  color: yellow;
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
.fa:hover {
  color:   #FF4500;
}
.fa:visited {     
    background:yellow;    
}
.iim
    {
      
      border-radius: 6px;     
    }
    i{
      padding-top: 7px;
      padding-right: 7px;
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
  <a class="navbar-brand" href="#"><i style="font-size:24px" class="fa">&#xf124;</i><span style="letter-spacing: 4px;">  MISSIVE</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i  style="font-size:30px; position: fixed ;top:7px;right:450px;" class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="message.php"><i style="font-size:30px; position: fixed ;top:7px;right:385px;" class="fa">&#xf086;</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="banner.php"><i style="font-size:30px; position: fixed ;top:9px;right:320px;" class="fa">&#xf110;</i></a>
      </li>
    </ul>
   
    <span class="navbar-text" style="position:fixed;top:4px;right:28px">
      <?php echo " <img src='$dp' alt='Avatar' class='center zoom avatar' style='width:40px; height: 40px;position:fixed;top:5px;right:80px'>";?>
      <div class="dropdown" style="float:right;">
        <div class="row">

      <div class="column" style="width:2%;">
         
      </div>

      <div class="column">
        <?php echo " <p style='color:white;font-size:21px'>$username</p>";  ?>
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

    <div class="snav" >
      <div class="w3-sidebar  w3-bar-block" style="width:15%;margin-top:-1px;margin-left: -3px; background-color:#848487;color:black">

  <a href="myprofile.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf2bd;</i>My Profile</a>
  <a href="profile.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf03e;</i>My Uploads</a>
  <a href="addpost.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf055;</i>Add Posts</a>
  <a href="addstatus.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf093;</i>Add Status</a>
  <a href="mcount.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf0a1;</i>Notifications</a>
  <a href="message.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf1d8;</i>Chat</a>
  
  <a href="webcam.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf030;</i>Camera</a>
  <a href="index.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf1b0;</i>Change DP</a>
  <a href="login.php" class="w3-bar-item w3-button"><i style="font-size:24px" class="fa">&#xf011;</i>LogOut</a>
</div>
<!-- //index,dp2 -->

    </div> 
    <br>
    <div class="des">
      <?php
      

        $con=mysqli_connect("localhost","root","","test1");
       $result="select username,img,title,location,body from post where username='$username' order by date desc ";
      
       
        $a=$con->query($result);

        while($row = $a->fetch_assoc()) 
        {
          $username=$row['username'];
            $location=$row['location'];
            $title=$row['title'];
            $body=$row['body'];
            $img=$row['img'];



          echo "<div class='inner-body'>
            
           
             <table class='center' >
             <tr>
             <td>
             <div class='row'>
      
        <img src=\"$dp\" alt='Avatar' class='avatar'/> ";
      
    
        echo "<p>"."$username"."</p>";
            echo "</td>";
             echo "</div>";
            echo "</tr>";
            echo "<tr><td>"."$title";
           
            echo "</p>";
            echo "#"."$location"."</td>";
            echo "</tr>";
            echo "<br>";
            echo '<tr>';
            echo "<tr><td>"."<img class=\"iim\"src=\"$img\" width=\"750px\" height=\"600px\"\>"."</td></tr>";
            echo "<br>";
            echo "<td>"."$body"."</td>";
            echo "<br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo '<a class="likes"><i  id="like" class="fa fa-thumbs-up fa-2x"></i></a>

<a class="likes"><i  id="dislike" class="fa fa-thumbs-down fa-2x" ></i></a>';
            echo '<div class="bot">
  
        <input id="un" class="mbox" type="text" name="msg" placeholder="Add Comment" required /> 
        <input id="submit-btn" type="submit" class="msub" name="submit" value="send" style="background-color:#10c254"/></div>';
           
            echo '</td>';
            echo "<br>";
            echo "</tr>";
            
            echo "<br>";
            echo "<br>";
            echo '</table>';

            echo "</div>";  
            echo "<br>";        
                  
        }
?>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>