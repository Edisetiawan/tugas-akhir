<?php
session_start();
require_once('inc-db.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PERPUSTAKAAN SMK MA'ARIF PONJONG GUNUNG KIDUL</title>
    <link rel="stylesheet" href="admin/plugin_validator/vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="admin/plugin_validator/css/bootstrapValidator.css"/>

    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->

    <script type="text/javascript" src="admin/plugin_validator/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="admin/plugin_validator/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="admin/plugin_validator/js/bootstrapValidator.js"></script>
    
    
    <!-- shjddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd  -->
    <!--   <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>    -->
    <script src="admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Forms -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="admin/js/sb-admin.js"></script>
    
    
    <!-- Core CSS - Include with every page -->
    
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <!-- Page-Level Plugin CSS - Forms -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="admin/css/sb-admin.css" rel="stylesheet"/>
    <script src="admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>
   <!-- <link href="css/scrolling-nav.css" rel="stylesheet"/> -->

    <!-- Bootstrap Core CSS -
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom CSS -
    <link href="css/scrolling-nav.css" rel="stylesheet"/>
    <!--
    <link rel="stylesheet" href="admin/plugin_validator/vendor/bootstrap/css/bootstrap.css"/>
    -
    <link rel="stylesheet" href="admin/plugin_validator/css/bootstrapValidator.css"/> 
    
    
    <script type="text/javascript" src="admin/plugin_validator/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="admin/plugin_validator/vendor/bootstrap/js/bootstrap.min.js"></script>
    
    
    <script type="text/javascript" src="admin/plugin_validator/js/bootstrapValidator.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<style type="text/css">
    #demoHeader {
        height: 350px;
        -webkit-background-size: 100% auto;
        -moz-background-size: 100% auto;
        background-size: 100% auto;
        background-repeat: no-repeat;
        background-position: center center;
        -webkit-box-shadow: rgba(0,0,0,0.20) 0 10px 10px;
        -moz-box-shadow: rgba(0,0,0,0.20) 0 10px 10px;
        box-shadow: rgba(0,0,0,0.20) 0 10px 10px;
    }

        .header1 {
            background-image: url("images/gambar-1.jpg");
        }

    #myCarousel .thumbnail {
        margin-bottom: 0;
    }

    .carousel-control.left, .carousel-control.right {
        background-image:none !important;
    }

    .carousel-control {
        color:#fff;
        top:40%;
        color:#428BCA;
        bottom:auto;
        padding-top:4px;
        width:30px;
        height:30px;
        text-shadow:none;
        opacity:1;
    }

    .carousel-control:hover {
        color: #d9534f;
    }

    .carousel-control.left, .carousel-control.right {
        background-image:none !important;
    }

    .carousel-control.right {
        left:auto;
        right:-32px;
    }

    .carousel-control.left {
        right:auto;
        left:-32px;
    }

    .carousel-indicators {
        bottom:-30px;
    }

    .carousel-indicators li {
        border-radius:0;
        width:10px;
        height:10px;
        background:#ccc;
        border:1px solid #ccc;
    }

    .carousel-indicators .active {
        width:12px;
        height:12px;
        background:#f0b600;;
        border-color:#f0b600;;
    }
</style>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
   <?php
  // require_once('menu.php');
   
   //require_once('header.php');
   if(isset($_GET['page']) && strlen($_GET['page']) > 0){
   $page=str_replace(".","/",$_GET['page']).".php";
   }else {
    $page="welcome.php";	
    }
    if(file_exists($page)){
	include($page);	
    }else{
    include("welcome.php");	
    }  
   
   ?>
<br />
    <!-- Home Section -->
 

    <!-- Katalog Section -->
   <?php
   //require_once('content.php');
   ?>
    <!-- /.Katalog Section -->

    <!-- Galeri Section -->
    <!-- jQuery 
    <script src="js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript 
    <script src="js/bootstrap.min.js"></script>-->

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <script>
        $('#myCarousel').carousel({
            interval:   4000
        });
    </script>

</body>

</html>
