<?php include( dirname(__FILE__) . '/../function/function.php'); ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>yogageneration | </title>

    <!-- Bootstrap -->
    <!-- <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <link href="/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    
    <link href="/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    
    <!-- bootstrap-datetimepicker -->
    <link href="/vendors/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    
    <!-- ericjgagnon-wickedpicker -->
    <link href="/vendors/ericjgagnon-wickedpicker/dist/wickedpicker.min.css" rel="stylesheet">
    
    <!-- bootstrap-drawer -->
    <!-- <link href="/vendors/bootstrap-drawer/css/bootstrap-drawer.min.css" rel="stylesheet"> -->
    <link href="/vendors/drawer/dist/css/drawer.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="/css/custom.css" rel="stylesheet">

    <!-- clockpicker -->
    <link href="/vendors/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
  </head>

  <body class="nav-md footer_fixed">
    
    <div class="container">
      <div class="main_container drawer drawer--left">
        <?php include( WORKSPACE . '/include/left.php' ); ?>
        <?php include( WORKSPACE . '/include/navigation.php' ); ?>