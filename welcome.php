<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="slidereg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>welcome</title>
   
</head>
<body>
    <section id="home">
        <header>
            <a href="#"><img src="images/logo.png" alt=""></a>
            <ul id="menu">
                <li><a href="#home" id="hm" class="top">Home</a></li>
                <li><a href="#about" class="top">About Us</a></li>
                <li><a href="#lecture" class="top">Lecture</a></li>
                <li><a href="#contact" class="top">Contact Us</a></li>
                <li>  <a href="http://localhost/login/login.php" class="top">Log Out</a></li>
            </ul>
        </header>

        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif, sans-serif; margin:0}
.mySlides {display: none}
img {
 
  vertical-align: middle;
  opacity: 1;}

/* Slideshow container */
.slideshow-container {
  max-width: 600px;
  position: relative;
  margin: auto;
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

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text-slide {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: 0} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.big{
    position: relative;
    height: 100px;
    top: 200px;
    left: 30px;
    opacity: 50%;
}
.video1{
 height: 225px;
 width: 400px;
 position: relative;
 top:190px;
 left: 80px;
}
.video2{
 height: 225px;
 width: 400px;
 position: relative;
 top:200px;
 left: 80px;
}
.video3{
 height: 225px;
 width: 400px;
 position: relative;
 top:-22px;
 left: 561px;
}
.video4{
 height: 225px;
 width: 400px;
 position: relative;
 top:-486px;
 left: 561px;
}
.video5{
 height: 225px;
 width: 400px;
 position: relative;
 top:-465px;
 left: 1053px;
}
.video6{
 height: 225px;
 width: 400px;
 position: relative;
 top: -935px;
    left: 1052px;
}
.about{
  height: 100px;
  width: 550px;
  font-weight: bold;
  position: relative;
  top: 200px;
  /* font-size: 15pt; */
  left: 136px;
  text-align: center;
  /* text-size-adjust: 15pt; */
  box-shadow: 0 0 2em rgba(211, 190, 190, 0.2);

}

</style>
</head>
<body>
<div class="big">
<div class="slideshow-container">

    <div class="mySlides fade">
    <div class="numbertext" style="margin-left: 100px">1 / 3</div>
    <a href="#about"><img src="catalyst_logo.jpg" style="width:60% ;margin-left: 100px; border-radius:10px"></a>
     <div class="text-slide"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href="courses.php"><img src="c++.jpeg" style="width:100% ; border-radius:10px"></a>
  <div class="text-slide">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <a href="courses.php"><img src="java.png" style="width:100% ; border-radius:10px"></a>
  <div class="text-slide">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)"></a>
<a class="next" onclick="plusSlides(1)"></a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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

//for feedback form

const username =document.querySelector('#name');

const email =document.querySelector('#email');

const message =document.querySelector('#message');

const send =document.querySelector('#sendp');

send.addEventlistner('click',(event)=>
{
      if(username.value=="" || email.value=="" || message.value=="" )
      {
            alert("form can't be empty");
            event.preventDeafault();
  }
}
)


</script>
</body>
</html>

         <h1>
         <button class="butt" ><p class="text"> <a href="https://docs.google.com/forms/u/3/?tgif=c">Test</a></p></button>
         <button class="butt1" ><p class="text"> <a href="analysis.php">Analysis</a></p></button>
         <button class="butt2" ><p class="text"> <a href="result.php">Result</a></p></button>
         <button class="butt3" ><p class="text"> <a href="pdf.php">Material</a></p></button>
         <button class="butt4" ><p class="text"> <a href="courses.php">Courses</a></p></button>
        
         
         </h1>
    </section>
    <section id="about">
    <div class="about" id="about1">
    
      <br>
      <br>
      <br> <ul style="padding-top:200px">
      <p> <li> Catalyst , is a platform that utilizes technology to provide educational resources, tools, and services to students, teachers, and learners of all ages.</p><br> </li>
      <p> <li> These websites aim to enhance the learning experience, facilitate access to education, and promote effective teaching methodologies .</p><br></li>
      <p> <li> The purpose of an  Catalyst  is to support and enhance the educational process by leveraging technology.</p><br> </li>
      <p> <li> It provides various educational resources, online courses, interactive learning materials, and tools to facilitate learning and knowledge acquisition.</p></li>
     </ul>
    </div>
  </section>
    <section id="lecture">
  <div class="video1">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/nm7MA3yjTho" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="video2">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Fk_c1t41nX0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="video3">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/OdfGONpWGE8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="video4">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/nm7MA3yjTho" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="video5">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/OdfGONpWGE8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="video6">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/nm7MA3yjTho" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </section>   
    <section id="contact">
      
    <div id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-lg-offset-1 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<address class="add">
                           
							<p class="contact-title" style="color:black">CONTACT ME</p>
                            <br>
							<p><i style="font-size:24px" class="fa">&#xf095;</i>985451808</p>
                            <br>
							<p><i class="fa fa-envelope-o"></i> cat@gmail.com</p>
                            <br>
							<p><i class="fa fa-map-marker"></i> collage road ,nadiad</p>
                          
						</address>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-10 wow fadeInUp" data-wow-delay="0.6s">
						<form role="form" method="post" action="#">
							<input name="name" type="text" class="form-control" class="username" id="username" placeholder="Your Name">
							<input name="email" type="email" class="form-control" class="email" id="email" placeholder="Your Email">
							<textarea name="message" rows="5" class="form-control" class="message" id="message" placeholder="Your Message"></textarea>
							<input name="send" type="submit" class="form-control"  class="send" id="send" value="SEND ME">
						</form>
					</div>
					<div class="col-md-1 col-sm-1"></div>
				</div>
			</div>
		</div>

      </div></section>
</body>
</html>
