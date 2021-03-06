<!DOCTYPE html>
<html lang="en">


<head>


	<style>
	hr {
	  padding: 0;
	  border: none;
	  border-top: medium double #333;
	  color: #333;
	  text-align: center;
	  }
	  hr:after {
	  content: "OR";
	  display: inline-block;
	  position: relative;
	  top: -0.7em;
	  font-size: 1.5em;
	  padding: 0 0.25em;
	  background: white;
	  }

@import "compass/css3";

@import url(http://fonts.googleapis.com/css?family=Merriweather+Sans);
 div.social-wrap button {
    padding-right: 45px;
    height: 100px;
    background: none;
    border: none;
    display: block;
    background-size: 35px 35px;
    background-position: right center;
    background-repeat: no-repeat;
    border-radius: 4px;
    color: white;
    font-family:"Merriweather Sans", sans-serif;
    font-size: 14px;
    margin-bottom: 15px;
    width: 205px;
    border-bottom: 2px solid transparent;
    border-left: 1px solid transparent;
    border-right: 1px solid transparent;
    box-shadow: 0 4px 2px -2px gray;
    text-shadow: rgba(0, 0, 0, .5) -1px -1px 0;
}
#bootstrap-overrides input{
	padding:5px ;
}
#fb{
max-width: 70%;}
#fb1{
max-width: 50%;}
<!--button#facebook {
    border-color: #2d5073;
    background-color: #3b5998;
    background-image: url(http://icons.iconarchive.com/icons/danleech/simple/512/facebook-icon.png);
}
button#googleplus {
    border-color: #DD4B39;
    background-color: #DD4B39;
    text-shadow: #333 -1px -1px 0;
    background-image:url(g.jpg);
}-->
div.social-wrap button:active {
    background-color: #222;
}
button {
    background-color: #FF6433;
    color: white;
    padding: 20px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.container1 {
    padding: 12px;
}

}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0px;
	position:fixed;
	bottom:20px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow-y: scroll; /* Enable scroll if needed */
    background-color: #ADD8E6; /* Fallback color */
    background-color: #ADD8E6; /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #ADD8E6;
	 position: fixed; /* Stay in place */
    margin: 15% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */

	bottom:100px;
	padding:30% auto 20% auto;
    border: 20px solid #888;
    width: 45%; /* Could be more or less, depending on screen size */
	height: 84%;

}

/* The Close Button (x) */
.close {
    position: absolute;
    top: 0;
    right: 25px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {

    .cancelbtn {
       width: 100%;
    }

}
.reg{

	    background-image: -webkit-linear-gradient(top, rgb(67, 135, 253), rgb(70, 131, 234));
		color:white;

}
td:nth-child(2) {
    padding-right: 20px;
}​

#bootstrap-overrides input#e1.email{
	width:300px;
}
#signin{
	positon:relative;
	top:30px;
}
#bootstrap-overrides animate-form{
	position:relative;
	top:10px;
}
{
	padding: 50px;
}

.animate
{
	transition: all 0.1s;
	-webkit-transition: all 0.1s;
}

.action-button
{
	position: relative;
	padding: 10px 40px;
  margin: 0px 10px 10px 0px;
  float: left;
	border-radius: 10px;
	font-family: 'verdena';
	font-size: 25px;
	color: #FFF;
	text-decoration: none;
}

.blue
{
	background-color: #3498DB;
	border-bottom: 5px solid #2980B9;
	text-shadow: 0px -2px #2980B9;
}

.red
{
	background-color: #E74C3C;
	border-bottom: 5px solid #BD3E31;
	text-shadow: 0px -2px #BD3E31;
}
.action-button:active
{
	transform: translate(0px,5px);
  -webkit-transform: translate(0px,5px);
	border-bottom: 1px solid;
}
.forum{
	color: black;
	cursor:pointer;

}
</style>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CODE ROYALE</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!--<link rel="stylesheet" href="assets/css/form-elements.css">-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/core.css">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
         <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/devops-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/devops-logo-logo.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/devops-logo.png">

    </head>

    <body id="bootstrap-overrides">

        <!-- Loader -->
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>

		<!-- Top menu -->
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--<a class="navbar-brand" href="index-2.html">Lancar - Bootstrap One-Page Portfolio Template</a>-->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="scroll-link" href="#top-content">Home</a></li>
						<!--<li><a class="scroll-link" href="#about">About</a></li>-->


						<!--<li><a class="scroll-link" href="#pricing-2">Rules</a></li>
							<li><a class="scroll-link" href="#contact">Contact</a></li>
						<li><a  href="http://forum.upescsi.in" target="_blank" >Forum</a></li>-->


					</ul>
				</div>
			</div>
		</nav>

        <!-- Page title -->
		 <section id="home-section" class="home-section full-screen" style="background-image: url('cr.jpg'); background-size:cover;">
                <div class="page-title top-content">
            <div class="page-title-text wow fadeInUp">
            	<h1 style="font-size:500%;"><font face="broadway" color="black"><b>CODE ROYALE</b></h1>
            	<p>Register with us for new coding experience</p></font>
              <center>
				<!--<button class="action-button shadow animate blue"  onclick="document.getElementById('id02').style.display='block'" style="width:auto;position:relative;left:150px ">SIGN IN </button>
            	<button class="action-button shadow animate blue"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;position:relative;left:160px">REGISTER</button>
            </center>
              <!--<a href="#" class="action-button shadow animate blue">Hello</a>
             <a href="#" class="action-button shadow animate red">How</a>-->
     </div>
     </div>
</div>
</section>
<marquee><font size="25"><b>Registrations will start soon.</b></font></marquee>



        <!-- About us
        <div class="about-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about section-description wow fadeIn">
	                    <h2>About us</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
	                    	aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>-->

        <!-- Block 2 (team member)
        <div class="block-2-container section-container about-block-2-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-4 block-2-box block-2-left block-2-media wow fadeInLeft">
	            		<div class="block-2-img-container">
	            			<img src="assets/img/about/5.jpg" alt="" data-at2x="assets/img/about/5.jpg">
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>

	            </div>
	        </div>
        </div>-->



		 <!-- Pricing -->
        <!--<div class="pricing-2-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 pricing-2 section-description wow fadeIn">
	                	<h2>Rules</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
	                    	Mirum est notare quam littera gothica, quam nunc putamus parum claram lorem.
	                    </p>
	                </div>

	                </div>
	            </div>
	        </div>
        </div>-->



        <!-- Call to action -->




		<!-- Contact us (block 2) -->
        <!--<div class="block-2-container section-container contact-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-2 section-description wow fadeIn">

						<h2><font color="black">Contact us</font></h2>
	                	<div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
						For technical issues contact:<br>
						PRANJAL JAIN:8959507173
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-4 block-2-box block-2-left contact-form wow fadeInLeft">
	            		<h3 style="text-align: right";><font color="black">For further queries post on <a class="forum" href="http://forum.upescsi.in" target="_blank"><u><b>forum</b></u></a></font></h3>

	            	</div>

	            </div>
	            <!--<div class="contact-icon-container">
            		<span aria-hidden="true" class="icon_mail"></span>
            	</div>-->
	        </div>
        </div>

		<!-- Portfolio -->


		      <!--          	</div>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>
		<div id="id01" class="modal" >

  <form class="modal-content animate" action="signup.php" method="post" style= "background-color: #eaf3f3;">
    <div class="imgcontainer" >
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
<div class="social-wrap a" id="wrapper" >
 <center><br>
   <!--<a  href="goauth.php"><img align="center" src="images/google-login-button.png" ></a>
    <a  href="#"><img align="center" id="fb1" src="images/facebook.png" ></a>
</center><br>
    <hr><br>-->
  <!--<h1>Sign Up</h1>

<form action="signup.php" method="post">
<table border="0">
<tr>
<td><b>Name:<b></td><td><input type="text" name="name" placeholder="Name " required=" "/></td></tr>
<tr><td><b>Password:<b></td><td> <input type="password" name="pwd" placeholder=" Password" required=" "/></td>
</tr>
<tr>
<td><b>Branch:<b></td><td><input type="text" placeholder="Branch"  name ="branch" required=" "/></td></tr>
<tr><td><b>Year:<b></td><td><input type="text" name="year" placeholder=" Year" required=" "/></td></tr>
</tr>
<tr>
<td><b>College:<b></td><td><input type="text" placeholder="College"  name ="college" required=" "/></td>
</tr>
<tr>
<td><b>Mobile:<b></td><td><input type="text" name="phone" placeholder="Mobile Number" required=" "/></td>
</tr>
<tr>
<center><tr><td ><b>Email:<b></td><td> <input type="email"class="email" id="e1" name="email" placeholder=" Email" required=" "/></td></tr></center>
<tr>

<td></td><col width="100" height="50"><td><input class="reg" type="Submit" value="Register" style="position:relative ;top:20px; left:160px; padding:10px;"></td>
</tr>
</tr></td></table>
    </form>
</div>
</div>
  </form>
</div>
<div id="id02" class="modal">




<section id="signin">

                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->

                    <!--<div id="wrapper">
                        <div id="login" class="animate form" style="padding-bottom:6px;padding-top:0px;background-color: #eaf3f3;position:relative;top:100px;left:40px;">
						<div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
                            <form  action="logincheck.php" method="post" autocomplete="on">
							<center><br>
   <!--<a  href="goauth.php"><img align="center" src="images/google-login-button.png" ></a>
    <a  href="#"><img align="center" id="fb" src="images/facebook.png" ></a>
</center><br>
    <hr><br>-->
                                <!--<h1 id="heading1">Sign in </h1>
                                <p>
                                    <label for="username" class="uname"  > Your email id: </label>
                                    <input id="username" name="username" required="required" type="text" placeholder=" Email-id or Username "/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd">  Your password :</label>
                                    <input id="password" name="password" required="required" type="password" placeholder=" Password" />
                                </p>

                                <p class="login button">
                                    <input type="submit" value="Sign in" />



                            </form>
                        </div></div></div></section></div>
        <!-- Footer -->
        <footer>
	        <div class="container">
	        	<div class="row">
		        	<div class="col-sm-12">
		        		<div class="scroll-to-top">
		        			<a href="#"><i class="fa fa-chevron-up"></i></a>
		        		</div>
		        	</div>
		        </div>

	        </div>
        </footer>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
		<!--<script>
		// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
-->
    </body>


<!-- Mirrored from azmind.com/demo/lancar/v1-0/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2016 08:50:55 GMT -->
</html>
