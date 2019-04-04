<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
  .quote
  {
    padding-top: 40px;
    text-align: center;
    padding-bottom: 5px;
  }
  
  input[type=text], input[type=password] { 
    width: 100%; 
    padding: 12px 20px; 
    margin: 8px 0; 
    display: inline-block; 
    border: 1px solid #ccc; 
    box-sizing: border-box; 
} 
  
  
button { 
    background-color: #4CAF50; 
    color: white; 
    padding: 14px 20px; 
    margin: 8px 0; 
    border: none; 
    cursor: pointer; 
    width: 100%; 
} 
  
  
.cancelbtn { 
    padding: 14px 20px; 
    background-color: #f44336; 
} 
  
  
.cancelbtn,.signupbtn {float:left;width:50%} 
  
  .container { 
    padding: 16px; 
} 
  
  
.modal { 
    display: none;  
    position: fixed;  
    z-index: 1; left: 0; 
    top: 0; 
    width: 100%; 
    height: 100%;  
    overflow: auto;  
    background-color: rgb(0,0,0);  
    background-color: rgba(0,0,0,0.4);  
    padding-top: 60px; 
} 
  
  
.modal-content { 
    background-color: #fefefe; 
    margin: 5% auto 15% auto;  
    border: 1px solid #888; 
    width: 30%;   
} 
  
  
.close { 
    position: absolute; 
    right: 35px; 
    top: 15px; 
    color: #f1f1f1; 
    font-size: 40px; 
    font-weight: bold; 
} 

.close:hover, 
.close:focus { 
    color: red; 
    cursor: pointer; 
} 
  
  
.clearfix::after { 
    content: ""; 
    clear: both; 
    display: table; 
} 
  
  
@media screen and (max-width: 300px) { 
    .cancelbtn, .signupbtn { 
       width: 100%; 
    } 
} 

<!--try-->
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}


/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<?php
  include "loggedinnav.php";
?>
<?php
  include "registermodal.php";
?>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="airplane.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="pic.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="quote">
  <h2>The United Difference</h2>
  <p style="padding-top: 15px;">Connecting People,Uniting the World</p>
</div>
<div class="w3-row-padding w3-padding-16">
  <div class="w3-third w3-margin-bottom w3-hover-opacity">
    <img src="card1.jpg" alt="card1 image" style="width: 100%;">
    <div class="w3-container w3-white">
      <h3>Domestic Flight Packages</h3>
      <h6 class="w3-opacity">From 50,000 INR</h6>
      <p>Coupon Code : FREEFLY</p>
      <p>Validity till: 30 December,2019</p>
      <a href="domestic.php"><button class="w3-button w3-block w3-black w3-margin-bottom">View Details</button></a>
    </div>
  </div>

  <div class="w3-third w3-margin-bottom w3-hover-opacity">
      <img src="int.jpg" alt="" style="width:100%">
      <div class="w3-container w3-white">
        <h3>International Flight Packages</h3>
        <h6 class="w3-opacity">From 1,00,000 INR</h6>
        <p>Coupon Code : FLTOFFER</p>
        <p>Validity till: 11 May,2019</p>
        <a href="international.php"><button class="w3-button w3-block w3-black w3-margin-bottom">View Details</button></a>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom w3-hover-opacity">
      <img src="cust.jpg" alt="" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Customized Flight Packages</h3>
        <h6 class="w3-opacity">From 2,00,000 INR</h6>
        <p>Coupon Code : MYOFFER</p>
        <p>Validity till: 11 August,2019</p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">View Details</button>
      </div>
    </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="#">Login</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>



<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team </p>

</div>

<img src="team.jpg" class="w3-image w3-greyscale-min" style="width:100%">
<!--Contact us form-->
<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
  <h2 class="w3-wide w3-center">CONTACT</h2>
  <p class="w3-opacity w3-center"><i>Interested? Want to know more!</i></p>
  <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> New Delhi, India<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: seleQtions@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required="" name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required="" name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required="" name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
</div>
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
  </div>
  <p>Developed by <a href="#" target="_blank" class="w3-hover-text-green">Tejoy Vachhrajani</a></p>
</footer>


</body>
</html>
<script>
  





