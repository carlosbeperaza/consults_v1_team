<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php base_url()?>resources/css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php base_url()?>resources/css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php base_url()?>resources/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php base_url()?>resources/css/custom.css">
    <!-- Custom stylesheet - color blue-->
    <link rel="stylesheet" href="<?php base_url()?>resources/css/style.blue.css">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <!-- JS (load angular, ui-router, and our custom js file) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php base_url()?>resources/js/angular.js"></script>
    <script src="<?php base_url()?>resources/js/angular-ui-router.min.js"></script>
    <script src="<?php base_url()?>resources/js/components/angular-messages/angular-messages.js"></script>
    <script src="<?php base_url()?>resources/js/components/oclazyload/ocLazyLoad.min.js"></script>
    <script src="<?php base_url()?>resources/js/components/satellizer/satellizer.js"></script>
    <script src="<?php base_url()?>resources/js/components/ngstorage/ngStorage.min.js"></script>
    <script src="<?php base_url()?>resources/app.js"></script>
    <script src="<?php base_url()?>resources/main.js"></script>
    <script src="<?php base_url()?>resources/config.constant.js"></script>
    <!-- <script src="angular-app/services/myServices.js"></script> -->
    <script src="<?php base_url()?>resources/config.router.js"></script>    
    <script src="<?php base_url()?>resources/js/controllers/mainCtrl.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.js"></script>
    
<!--    SWEETALAERT
    <script src="<?php base_url()?>resources/js/components/sweetalert/sweetalert.js"></script>
    <script src="<?php base_url()?>resources/js/components/sweetalert/sweetalert.css"></script>-->
    <!--CSSPING-->
    <!--<script src="<?php base_url()?>resources/js/components/csspin/csspin.css"></script>-->
    
</head>

<!-- apply our angular app to our site -->
<body  ng-app="app" >
    <div ng-controller="AppCtrl">
    
    
    <div ui-view></div>


    <!-- Javascript files-->
    
    <script src="<?php base_url()?>resources/js/tether.min.js"></script>
    <script src="<?php base_url()?>resources/js/bootstrap.min.js"></script>
    <script src="<?php base_url()?>resources/js/jquery.cookie.js"> </script>
    <script src="<?php base_url()?>resources/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php base_url()?>resources/js/jquery.nicescroll.min.js"></script>
    <script src="<?php base_url()?>resources/js/jquery.validate.min.js"></script>
    <script src="<?php base_url()?>resources/js/chart.js"></script>
    <!-- <script src="<?php base_url()?>resources/js/charts-home.js"></script> -->
    <script src="<?php base_url()?>resources/js/front.js"></script>
    </div>
</body>
</html>
