<?php

include('inc/db.php');
include('inc/functions.php');

?>
<html>
<head>
    <title>CoreCMS</title>
    <meta http-equiv="content-type" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="css/main.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="css/content.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css" media="screen,projection">
</head>
<body>
<div class="topline">
    <div class="container">
        <div class="row">
            <div class="logo col m4">
                Core<span class="green-text">CMS</span>
            </div>

            <div class="menu col m8">
                <ul>
                    <li><a href="#" class="current-nav"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#"><i class="far fa-newspaper"></i> News</a></li>
                    <li><a href="#"><i class="fas fa-users"></i> Users</a></li>
                    <li><a href="#" class="logout"><i class="fas fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="notifications col s12">
            <div class="notification red">
                Important message to staff
            </div>
        </div>
    </div>
</div>
