<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo isset($page_title) ? $page_title : "Vuurwerk Webshop"; ?></title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    
    <!-- custom css for users -->
    <link href="libs/css/user.css" rel="stylesheet" media="screen"/>
    <style>
    body{
        background-image: url("back.gif");
        background-repeat: no-repeat;
        font-style: italic;
        font-weight: bolder;
        color: green;
        background-size: cover;
    }
    </style>
</head>
<body>
    <link href="libs/css/navbar.css" rel="stylesheet" media="screen">
    <?php include 'navigation.php'; ?>
    <?php include 'navbar.php'; ?>
    <!-- container -->
    <div class="container">
        <div class="row">
 
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo isset($page_title) ? $page_title : "Vuurwerk Webshop"; ?></h1>
            </div>
        </div>