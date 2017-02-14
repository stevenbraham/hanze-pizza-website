<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css"/>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/favicon.png"/>
    <title>Pizza plaza</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href=".">Pizza plaza</a>
        </div>
        <div class="navbar-right">
            <a href="?controller=card&action=view" class="btn btn-success navbar-btn"><i class="fa fa-shopping-cart"></i> &euro;<?= number_format(\App\Models\Card::getTotalPrice(), 2) ?></a>
        </div>
    </div>
</nav>
<div class="container">