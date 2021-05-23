<!DOCTYPE html>
<html>
	<head lang="tr-Tr">
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Giriş Sayfası</title>
        
	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
			<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">	
		  <!-- ek stiller -->
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="js/jquery-2.2.3.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	    <link rel="stylesheet" type="text/css" href="Demo-css.css">
	    <script src="Demo(Turkish)-Javascript.js" type="text/javascript"></script>
	</head>

	<body style="background: url(images/noise.jpg);">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<span class="navbar-brand" style="font-weight: bolder;color: white;font-family: 'Georgia','Times New Roman';">
						<strong> Sakarya </strong>
					</span>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="Nav">

				<ul class="nav navbar-nav">
                    <li><a href="Index.html">Şehrim</a></li>
                    <li><a href="about.html">Hakkımda</a></li>
                    <li><a href="heritage.html">Mirasımız</a></li>
                    <li><a href="CV.html">Özgeçmiş</a></li>
                    <li><a href="contactMe.html">İletişim</a></li>
                    <li><a href="api.html">İlgi Alanlarım (API)</a></li>


                </ul>
				  
					<ul class="nav navbar-nav  navbar-right pad10">
						<div class="btn-group" >
					 		<a href="login.php" class="btn btn-success" id="myBtn">
							<span class="glyphicon glyphicon-log-in"></span> Giriş </a>
						</div> 
					</ul>
				</div>
			</div>
		</nav>
<!--End Of Head-->

</head>
<body>


<?php

    $initUserName = "b081210006@sakarya.edu.tr";
    $initPsw = 12345;


    if(empty($_POST["userName"]) || empty($_POST["userPsw"])){
    die(header("Location: login.php?loginFailed=true&reason=blank"));
    }

    else if(($_POST["userName"]!=$initUserName) || ($_POST["userPsw"]!=$initPsw)){
            die(header("Location: login.php?loginFailed=true&reason=username"));
            
        }
        
    else{
            echo "Hoşgeldiniz b08120006";
            echo "<p><a href='login.php'>&lt;Giriş sayfasına dön&gt;</a></p>";
            echo "<p><a href='Index.html'>&lt;Ana sayfaya dön&gt;</a></p>";

        }


?>

</body>

<!--Footer-->
<footer id="footer">
    <div class="row">
        <div class="container-fluid">
            <div class="col-md-10 text-info"></div>
            <div class="col-md-2 ">
                <ul class="social-network social-circle">
                    <li>
                        <a href="https://github.com/erkambayindir" target="_blank" class="icoGithub" title="Github">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/erkam-bayindir-25a70635/" target="_blank" class="icoLinkedin" title="Linkedin">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--button pushing to top-->
<div class="pull-right">
    <a href="#">
        <button>
            <span class="glyphicon glyphicon-arrow-up" style="color: black;"></span>
        </button>
    </a>
</div>
</html>