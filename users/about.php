<?php
$title="About Us";$setAboutActive="active";
include 'layout/_header.php';

include 'layout/navbar.php';
?>

<style>

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
	background:white;
}

.header {
	height: 20vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(image/contact-bg.jpg);
    background-position: 50% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    text-align: center;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.head{
	text: bold;
	text-align: center;
}
.q2{
	text-align: justify;
	justify-content: center;
}
.services-1{
	height: 55vh;
	background-color:#b4b8ae;
	background-repeat: no-repeat;
	background-attachment: fixed;
}

.list{
	padding: 5px;
	text-align:justify;
	text-size: 12px;
	
*{
	margin:0;
	padding:0;
	font-family: sans-serif;
}
.team-section{
	background: #34495e;
	padding: 50px;
}
.team-section h1 {
	text-align: center;
	text-transform: uppercase;
	margin-bottom: 50px;
	color: white;
	font size: 40 px;
}
.name{
	text-decoration: center;
	text-align: justify;
	text-transform: uppercase;
	font-size: 12px;
	font-gap: 12px;
}
}

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Open Sans', sans-serif;
    line-height: 1.5;
}
.contact-bg{
    height: 40vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(image/contact-bg.jpg);
    background-position: 50% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    text-align: center;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.contact-bg h3{
    font-size: 1.3rem;
    font-weight: 400;
}
.contact-bg h2{
    font-size: 3rem;
    text-transform: uppercase;
    padding: 0.4rem 0;
    letter-spacing: 4px;
}
.line div{
    margin: 0 0.2rem;
}
.line div:nth-child(1),
.line div:nth-child(3){
    height: 3px;
    width: 70px;
    background: #f7327a;
    border-radius: 5px;
}
.line{
    display: flex;
    align-items: center;
}
.line div:nth-child(2){
    width: 10px;
    height: 10px;
    background: #f7327a;
    border-radius: 50%;
}
.text{
    font-weight: 300;
    opacity: 0.9;
}
.contact-bg .text{
    margin: 1.6rem 0;
}
.contact-body{
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 1rem;
}
.contact-info{
    margin: 2rem 0;
    text-align: center;
    padding: 2rem 0;
}
.contact-info span{
    display: block;
}
.contact-info div{
    margin: 0.8rem 0;
    padding: 1rem;
}
.contact-info span .fas{
    font-size: 2rem;
    padding-bottom: 0.9rem;
    color: #f7327a;
}
.contact-info div span:nth-child(2){
    font-weight: 500;
    font-size: 1.1rem;
}
.contact-info .text{
    padding-top: 0.4rem;
}
.contact-form{
    padding: 2rem 0;
    border-top: 1px solid #c7c7c7;
}
.contact-form form{
    padding-bottom: 1rem;
}
.form-control{
    width: 100%;
    border: 1.5px solid #c7c7c7;
    border-radius: 5px;
    padding: 0.7rem;
    margin: 0.6rem 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 1rem;
    outline: 0;
}
.form-control:focus{
    box-shadow: 0 0 6px -3px rgba(48, 48, 48, 1);
}
.contact-form form div{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    column-gap: 0.6rem;
}
.send-btn{
    font-family: 'Open Sans', sans-serif;
    font-size: 1rem;
    text-transform: uppercase;
    color: #fff;
    background: #f7327a;
    border: none;
    border-radius: 5px;
    padding: 0.7rem 1.5rem;
    cursor: pointer;
    transition: all 0.4s ease;
}
.send-btn:hover{
    opacity: 0.8;
}
.contact-form > div img{
    width: 85%;
}
.contact-form > div{
    margin: 0 auto;
    text-align: center;
}
.contact-footer{
    padding: 2rem 0;
    background: #000;
}
.contact-footer h3{
    font-size: 1.3rem;
    color: #fff;
    margin-bottom: 1rem;
    text-align: center;
}
.social-links{
    display: flex;
    justify-content: center;
}
.social-links a{
    text-decoration: none;
    width: 40px;
    height: 40px;
    color: #fff;
    border: 2px solid #fff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0.4rem;
    transition: all 0.4s ease;
}
.social-links a:hover{
    color: #f7327a;
    border-color: #f7327a;
}

@media screen and (min-width: 768px){
    .contact-bg .text{
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }
    .contact-info{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}

@media screen and (min-width: 992px){
    .contact-bg .text{
        width: 50%;
    }
    .contact-form{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
    }
}

@media screen and (min-width: 1200px){
    .contact-info{
        grid-template-columns: repeat(4, 1fr);
    }
}

</style>



<body> 

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <a href="#" id="Heading">About Us</a>
        </div>
    </div>
</div>

<div class = "header">
<h2  class = "head" > Services </h2> 
<span> Donate your blood for a reason, let the reason to be life. <span>

</div>




</div>

<div class = "team-section">
<h1> Meet with Our Group Members <h1>

<ul class = "name" > 
  
	<li> 
	     <span> MOHD SYAHRUDDIN BIN SYAHRIR  17071183/1 <span>
	</li>
	<li>
	     <i>AHMED MOHAMED FATHY ESSA 17133602/1  <i> 
	</li>
	<li>
	     <i> ARSHANAA PIRABAKARAN 17134363/1 <i> </li>
	<li> 
         <i> ZAMIL BIN ZAINOL  17150138/1 <i></li>
	<li>
	     <i> NUR ARINA BINTI MOHD RIDHUAN AU  17191037/1 <i> </li>
	<li>
	     <i> MD RASED 17128549 <i> </li>
	<li> 
	     <i> AHMAD HAFIZUL ILMI BIN AHMAD KHAIRI  17127354/1<i></li>
</ul>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
     <section class = "contact-section">
        
     
      <div class = "contact-bg">
        <h3>Get in Touch with Us</h3>
        <h2>contact office and Send Message</h2>
        <div class = "line">
   
        </div>
        <p class = "text">Anybody can give blood and Bring a life back to power</p>
      </div>


      <div class = "contact-body">
        <div class = "contact-info">
          <div>
            <span><i class = "fas fa-mobile-alt"></i></span>
            <span>Phone No.</span>
            <span class = "text">+60109087975</span>
          </div>
          <div>
            <span><i class = "fas fa-envelope-open"></i></span>
            <span>E-mail</span>
            <span class = "text">blood_bank21@gmail.com</span>
          </div>
          <div>
            <span><i class = "fas fa-map-marker-alt"></i></span>
            <span>Address</span>
            <span class = "text">Jln Profesor Diraja Ungku Aziz, 50603 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</span>
          </div>
          <div>
            <span><i class = "fas fa-clock"></i></span>
            <span>Opening Hours</span>
            <span class = "text">Everyday (9:00 AM to 5:00 PM)</span>
          </div>
		  </div>
          

          <div>
            <img src = "image/contact-png.png" alt = "">
          </div>
        </div>
  

      <div class = "map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223700.1490386933!2d-97.11558670486288!3d28.829485511234168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864266db2e2dac3b%3A0xeee20d566f63267d!2sVictoria%2C%20TX%2C%20USA!5e0!3m2!1sen!2snp!4v1604921178092!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>


      <div class = "contact-footer">
        <h3>Follow Us</h3>
        <div class = "social-links">
          <a href = "#" class = "fab fa-facebook-f"></a>
          <a href = "#" class = "fab fa-twitter"></a>
          <a href = "#" class = "fab fa-instagram"></a>
          <a href = "#" class = "fab fa-linkedin"></a>
          <a href = "#" class = "fab fa-youtube"></a>
        </div>
      </div>
	  </div>
    </section>

</body>








<?php include 'layout/_footer.php'; ?>

