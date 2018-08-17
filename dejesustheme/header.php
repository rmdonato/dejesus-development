<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>De Jesus & Associates</title>
    <link rel="stylesheet" href="~/assets/css/site.css">    
    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!--Style.css-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/site.css">
</head>
<body  <?php body_class(); ?>>
<div class="navbar navbar-inverse navbar-expand-lg navbar-dark bg-dark navbar-fixed-top sticky-top">
        <a class="navbar-brand" href="">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-white.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            	<?php wp_list_pages( '&title_li=' ); ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Services</a>    
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">Commentary</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>

