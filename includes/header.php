
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Vertex</title>
    <link href="/css/variables.less " rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>

    <!-- Custom styles for this template -->
    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <?php
    $currentPath = $_SERVER['REQUEST_URI'];
    $adminAsset = '/admin/asset-managment.php';
    $adminResource = '/admin/keyresource-managment.php';


    if ($currentPath == $adminAsset or $adminResource) {
        $body = "adminPage";
    } else {
        
    }
  ?>
  <body id="<?php echo $body; ?>">

    <!-- Fixed navbar -->
    <div class="pos-f-t">
      <div class="collapse" id="navbar-header">
        <div class="container bg-inverse p-1">
          <h3>Collapsed content</h3>
          <p>Toggleable via the navbar brand.</p>
        </div>
      </div>
      <?php require 'nav.php';?>
    </div>