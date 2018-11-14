
<?php
session_start();
if(!isset($_SESSION['id']))
{
    include 'controllers/C_LoginController.php';
    die();
}

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>L'Avocat</title>
	
        <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="resources/css/style.css" type="text/css">

        <script src="resources/js/bootstrap.min.js"></script>
        <script src="resources/js/bootstrap.js"></script>
</head>
<body>
	<nav class="n-color navbar navbar-toggleable-md navbar-fixed-top navbar-light bg-faded">
              <button class="navbar-toggle navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
              </button>
              <a class="navbar-brand" href="?page=home.php"><b class="slogan-position">L'AVOCATE</b></a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item title-2"><a class="nav-link title" href="?page=home">HOME</a></li>
                    <li class="nav-item title-2"><a class="nav-link title" href="?page=controllers/C_Editlawyer">MANAGE LAWYERS</a></li>
                    <li class="nav-item title-2"><a class="nav-link title" href='?page=controllers/C_Editclient'>MANAGE CUSTOMERS</a></li>
                    <li class="nav-item title-2"><a class="nav-link title" href='?page=views/V_History'>HISTORY</a></li>
                    <li class="nav-item title-2"><a class="nav-link title" href='?page=controllers/C_Editprofile'>PROFILE</a></li>
                    <li class="nav-item title-2"><a class="nav-link title" href='?page=controllers/C_Report'>REPORT</a></li>
                </ul>
                  
                <ul class="nav navbar-nav navbar-right">
                    <a class="btn" href='?page=controllers/C_logout'><li class="sign-up2"><span class="glyphicon glyphicon-user"></span>LOG OUT</li></a>
                </ul>
              </div>
            </nav>
                 <section id="page">
                    <?php
                    if (@$_GET['page']) {
                        $url = $_GET['page'] . ".php";
                        if (is_file($url)) {
                            include $url;
                        } else {
                            echo 'requested file is not found !';
                        }
                    } else {
                        include 'home.php';
                    }
                    ?>
                 </section>
    
    
 </body>
</html>