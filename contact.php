<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>

<style>
	.section .row{
    margin-top: 7%;
    margin-bottom: 10%;
}
.section .row .col-md-6{
    background: #f5f5f5;
    margin-right: -2%;
    padding: 5%;
}
.section h3{
    color: #004085;
}
.section p{
    margin-top: 10%;
    color: #545b62;
}
.section img
{
    width: 100%;
}

	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
		
	.contact-info{
		margin-top:10%;
	}
	
</style>
</head>
<body>

<?php
    if(isset($_SESSION['username']))
    {
         include "loggedinnav.php";
    }
    else
    {
         include "loggedoutnav.php";
    }
?>



<div class="container section">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        Highly Dedicated Customer Support
                    </h3>
                    <p>
                        Right from the inception, SeleQtions, is dedicated to serve its customers around the world.<br>	 Members of the SeleQtions network are encouraged to offer their skills and experience to these projects, whether to solve a timely problem or to contribute on an ongoing basis.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="https://preview.ibb.co/erdq8p/Employee-1.jpg" alt=""/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="https://preview.ibb.co/cu76g9/Employee-2.jpg" alt=""/>
                </div>
               <div class="col-md-6">
                    <h3>
                        Cutting-Edge Skill Development
                    </h3>
                    <p>
                       SeleQtions hosts regular, rigorous learning sessions for the most in-demand skills.<br> By presenting our elite, experienced network with ongoing opportunities to update and elevate their portfolios, we are able to solve pressing talent shortages while ensuring success for dedicated participants.
                    </p>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
        <!--form-->
        <div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Any Queries !?</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">First Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Last Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div>
					<button type="submit" class="btn btn-default" style="width: 100px;">Submit</button>
				  </div>
				</div>
			</div>
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