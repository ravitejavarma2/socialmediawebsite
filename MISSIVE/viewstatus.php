<?php
        session_start();
        
        $con=mysqli_connect("localhost","root","","test1","3307");
        $sql=$con->query("SELECT username,dp,statusimg,caption,date from status;");

?>

<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script async src="https://cdn.ampproject.org/v0.js"></script>
  <script
    async
    custom-element="amp-story-player"
    src="https://cdn.ampproject.org/v0/amp-story-player-0.1.js"
  >
</script>
<style>
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
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
body {
  background-image: url("https://www.wallpaperflare.com/static/368/128/928/background-spots-shadows-dim-wallpaper.jpg");
  position:fixed;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
}
*{
box-sizing: border-box
}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */

.slideshow-container {
  border-top: 5px;
  background-color: #784f4f;
  max-width: 700px;
  height: 700px;
  position: fixed;
  top: 40px;
  margin: auto;
  left: 500px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


/* Caption text */
.text {
  background-color: #8a8a8a;
  color: solid black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}
.aligned {
    display: flex;
    align-items: center;
}
span {
    padding: 10px;
}
</style>
<script type="text/javascript">


</script>
</head>
<body>
 
   <a href="feed.php" style="position:fixed; top;top:0px;left:0px;color:#00ff44"><i class="fa fa-arrow-circle-left" style="font-size:36px"></i></a>
<div class="slideshow-container" >
 
<?php  

while($row = $sql->fetch_assoc())
{
  $use=$row['username'];
  $sdp=$row['dp'];
  $caption=$row['caption'];
  $statimg=$row['statusimg'];
  echo "
      <div class='mySlides fade'>
          <div class='container'> 
          <img src='$statimg' style='width:600px; height:700px;'>
          <div class='text'>$caption</div>
          <div class='aligned'>
          <div class='top-left' style='color:white;background-color:silver;'><img src='$sdp' alt='Avatar' class='avatar'/><span style='color:black'>$use</span></div>
          </div>
        </div>
      </div>
";
}

?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




</body>
</html>