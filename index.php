<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>File share</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/Project_css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/Project_css/modern-business.css" rel="stylesheet">
    <link href="css/tests.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="css/Project_css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
<link rel="shortcut icon" type="image/png" href="http://www.example.com/favicon.png" />




 <script src="js/Project_Jquery/Form_js/jquery-1.11.0.min.js"></script>

</head>
<body>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a> 
                
            </div>
            
          
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a href="php/team.php">Team</a>
                    </li>
                    <li>
                        <a href="php/contact.php">Contact</a>
                    </li>
                 
                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="#">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="#">Blog Post</a>
                            </li>
                        </ul>
                    </li>!>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Full Width Page</a>
                            </li>
                            <li>
                                <a href="#">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('Images/Project_images/nature1.jpg');"></div>
                <div class="carousel-caption">
                    <!--<h2>Caption 1</h2>-->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Images/Project_images/nature2.jpg');"></div>
                <div class="carousel-caption">
                    <!--<h2>Caption 1</h2>-->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Images/Project_images/nature4.jpg');"></div>
                <div class="carousel-caption">
                     <!--<h2>Caption 1</h2>-->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

  
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Team Socket Programmers
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4> Description</h4>
                    </div>
                    <div class="panel-body">
                        <p>Please login with your username and password</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Client Sign in</h4>
                    </div>
                    <div class="panel-body" style="background:#c2fff4;">
                        <h2></h2>
                        	<!--<form action="php/uploadphoto.php" method="post">
					<label>UserName :</label>
						<input id="id" name="id" placeholder="username" type="text"><br>
					<label>Password :</label>
						<input id="id" name="password" placeholder="**********" type="password"><br>
					<input name="goSubmit" type="submit" value=" Login ">
				
				</form>-->
				 <form class="form-signin" action="php/checklogin.php" method="post">
				        <h2 class="form-signin-heading">Please sign in</h2>
					        <label for="Username" class="sr-only">Username</label>
						        <input type="text" id="id" name="id" class="form-control" placeholder="Enter username" required autofocus>
				        	<label for="inputPassword" class="sr-only">Password</label>
						        <input type="password" id="password" name="password" class="form-control" placeholder="********" required>
				     	<div class="checkbox">
				          <label>
				            <input type="checkbox" value="remember-me"> Remember me
				          </label>
				        </div>
				        <?php if (isset($_GET['loginFailed']) && $_GET['loginFailed']==TRUE) 
				        { echo '<div class="alert alert-danger" role="alert">Invalid username/password</div>'; } ?>
				        <input class="btn btn-lg btn-primary btn-block" type="submit" name="goSubmit" value="Sign in">
				  

				 </form>
<div class="bs-example">
    <div class="panel-group" id="accordion">
				
				<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Not a registered member?</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="form-signin" action="php/register.php" method="post">
				        <h2 class="form-signin-heading">Register!!!</h2>
					        <label for="Username" class="sr-only">Username</label>
						        <input type="text" id="id" name="id" class="form-control" placeholder="Enter username" required autofocus>
				        	<label for="inputPassword" class="sr-only">Password</label>
						        <input type="password" id="password" name="password" class="form-control" placeholder="********" required>
				     	<div class="checkbox">
				          <label>
				            <input type="checkbox" value="remember-me"> Remember me
				          </label>
				        </div>
				        <?php if (mysqli_query($conn, $myQuery)) { 
				        echo '<div class="alert alert-danger" role="alert">registered successfully</div>'; } ?>
				        <input class="btn btn-lg btn-primary btn-block" type="submit" name="RegisterQuery" value="Sign in">
				  

				 </form>
                </div>
            </div>
        </div>
    </div> 
    </div>
 
                    </div>
                </div>
            </div>
     <div class="container">
<div class="row">
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <b>Members</b></div>
<div class="panel-body" style="background:#c2fff4;">
<div class="row">
<div class="col-xs-12">
<ul class="demo1">
<li class="news-item">
<table cellpadding="4">
<tr>
<td><img src="Images/Project_images/duo.jpg" width="60" class="img-circle" /></td>
<td>Duo</td>
</tr>
</table>
</li>
<li class="news-item">
<table cellpadding="4">
<tr>
<td><img src="Images/Project_images/saumit.jpg" width="60" class="img-circle" /></td>
<td><p>Saumit</p></td>
</tr>
</table>
</li>
<li class="news-item">
<table cellpadding="4">
<tr>
<td><img src="Images/Project_images/me.jpg" width="60" class="img-circle" /></td>
<td><p>Sourav</p></td>
</tr>
</table>
</li>
<li class="news-item">
<table cellpadding="4">
<tr>
<td><img src="Images/Project_images/IMG_2708.JPG" width="60" class="img-circle" /></td>
<td><p>Bhagyashree</p></td>
</tr>
</table>
</li>
<li class="news-item">
<table cellpadding="4">
<tr>
<td><img src="Images/Project_images/FullSizeRender.jpg" width="60" class="img-circle" /></td>
<td>Hema</td>
</tr>
</table>
</li>
<li class="news-item">
<table cellpadding="4">
<tr>
<td><img src="Images/Project_images/rakshit.jpg" width="60" class="img-circle" /></td>
<br><td><p>Rakshith</p></td>
</tr>
</table>
</li>

</ul>

</div>
</div>
</div>
<div class="panel-footer"> </div>
     </div>
</div>

           
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-hover" src="Images/Project_images/pic1(700x450).jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-hover" src="Images/Project_images/pic2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-hover" src="Images/Project_images/pic3.jpg" alt="">
                </a>
            </div>
          

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Features</h2>
            </div>
            <div class="col-md-6">
                <p>File sharing</p>
                <ul>
                    <li><strong>Information</strong></li>
                    <li><p><b>Task:</b> Uploading files in </p></li>
                    <li><p>Between web server backend domains, design and implement a cross domain communication mechansim using CURL to allow a file from one domain to be sent and saved in another domain.</li>


                    
                </ul>
                
            </div>
           
            <div class="col-md-6">
                <img class="img-responsive" src="Images/Project_images/socketprogrammers.PNG" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <!--<div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Under Construction</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>-->

        <hr>
        <br><br>

        <!-- Footer -->
         <footer>
            <div class="row">
                <div class="col-lg-12">
                	<div class="panel-footer"> 
                    <center><p>Copyright &copy; <a class="navbar-brand" href="home.html">www.chatterjeesourav.com</a>2015</p></center>
                </div>
            </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/Project_Jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/Project_Jquery/bootstrap.min.js"></script>
        <script src="js/Project_Jquery/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>


    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<script type="text/javascript">
   
        
		
	$(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });

       
    });
</script>

</body>

</html>
