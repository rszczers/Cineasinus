<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://<?php echo App::ABS_PATH;; ?>data/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://<?php echo App::ABS_PATH;; ?>data/css/style.css">        
        <link rel="stylesheet" href="http://<?php echo App::ABS_PATH;; ?>data/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="http://<?php echo App::ABS_PATH;; ?>data/css/main.css">

        <script src="http://<?php echo App::ABS_PATH; ?>data/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->        
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://<?php echo App::ABS_PATH ?>">Cineasinus</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form action="log/in" class="navbar-form navbar-right" role="form" method="post">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Zaloguj się</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>