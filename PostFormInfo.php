<!Doctype html>
<html>

<head lang="en">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
     <title>Erkam Bayındır Bilgisayar Mühendisliği Öğrencisi</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">	
    <!-- ek stiller -->
    <link href="css/style.css" rel="stylesheet">
    <!-- ek stiller for CV-->
	<link href="css/contactStyles.css" rel="stylesheet">
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

        <body class= "container">

        <h2 style="text-align: center">Form Bilgisi</h2>

                <table class= "tableStyle">
                        <!--Name Row-->
                        <tr>
                                <td class= "WidthOfContactColumn">İsim </td><td>:</td><td>
                                <?php
                                        echo $_POST["firstname"];

                                ?>
                                </td>

                        </tr>
                        <!--Surname Row-->
                        <tr>
                                <td class= "WidthOfContactColumn">Soyisim </td><td>:</td><td>
                                <?php
                                        echo $_POST["lastname"];

                                ?>
                                </td>

                        </tr>
                        <!--Email Row-->
                        <tr>
                                <td class= "WidthOfContactColumn">E-mail </td><td>:</td><td>
                                <?php
                                        echo $_POST["email"];

                                ?>
                                </td>

                        </tr>                        
                        <!--Topic title Row-->
                        <tr>
                                <td class= "WidthOfContactColumn">Konu Başlığı </td><td>:</td><td>
                                <?php
                                        echo $_POST["ltitle"];

                                ?>
                                </td>

                        </tr>
                        <!--Subject Row-->                        
                        <tr>
                                <td class= "WidthOfContactColumn">Mesaj: </td>

                        </tr>
                        <!--Message/Subject Text area -->                        
                        <tr>
                                <td colspan = "3" class= "mesgBagr"> 
                                <?php
                                        echo $_POST["subject"];

                                ?>
                                </td>

                        </tr>


                </table>

        </body>

</Html>