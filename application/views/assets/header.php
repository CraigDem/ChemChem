<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ChemChem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="../../ChemChem/css/bootstrap.css" rel="stylesheet">
    <link href="../../ChemChem/css/chemchem.css" rel="stylesheet">
    <link href="../../ChemChem/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  	  </head>
  	  
  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">
    
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo site_url(); ?>">ChemChem</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maths <b class="caret"></b></a>
                <ul class="dropdown-menu">
	            	<li class="nav-header">Geometry</li>
	            	<li><a href="<?php echo site_url("Maths/pythagoras_input"); ?>">Pythagoras</a></li> 
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Chemistry <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header">Calculations</a></li>
                  <li><a href="<?php echo site_url("Chemistry/beer_lambert_input"); ?>">Beer Lambert Law</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><!-- /.container -->
