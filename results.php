<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" type="text/css">

</head>
 
<body>
    <div class="topspace"></div>
<?php
    $url = $_GET['barcode'];

    if ($url == '02297309') {
        echo 
            '<h1>Product</h1>
                <p>Altoid Small Mints</p>
            <h1>Outer Shell</h1>
                <p>Recycle</p>
            <h1>Inner Shell</h1>
                <p>N/A</p>
            <h1>Contents</h1>
                <p>Trash</p>';
    } elseif ($url == '04310007595') {
        echo 
            '<h1>Product</h1>
                <p>Spiral Bound Notebook</p>
            <h1>Outer Shell</h1>
                <p>Trash</p>
            <h1>Inner Shell</h1>
                <p>Trash</p>
            <h1>Contents</h1>
                <p>Recycle</p>';}
        elseif ($url == '01254631241') {
        echo 
            '<h1>Product</h1>
                <p>Dentyne Gum</p>
            <h1>Outer Shell</h1>
                <p>Trash</p>
            <h1>Inner Shell</h1>
                <p>Trash</p>
            <h1>Contents</h1>
                <p>Trash</p>';}
        elseif ($url == '012546612296') {
        echo 
            '<h1>Product</h1>
                <p>Trident Gums</p>
            <h1>Outer Shell</h1>
                <p>Trash</p>
            <h1>Inner Shell</h1>
                <p>Trash</p>
            <h1>Contents</h1>
                <p>Trash</p>';}
        elseif ($url == '087300700199') {
        echo 
            '<h1>Product</h1>
                <p>Cleansing Facial Wipe</p>
            <h1>Outer Shell</h1>
                <p>Trash</p>
            <h1>Inner Shell</h1>
                <p>N/A</p>
            <h1>Contents</h1>
                <p>Trash</p>';}
        elseif ($url == '4549337389779') {
        echo 
            '<h1>Product</h1>
                <p>MUJI Black Pen</p>
            <h1>Outer Shell</h1>
                <p>Trash</p>
            <h1>Inner Shell</h1>
                <p>N/A</p>
            <h1>Contents</h1>
                <p>Trash</p>';}
        elseif ($url == '073852019445') {
        echo 
            '<h1>Product</h1>
                <p>Sanitizing Wipe</p>
            <h1>Outer Shell</h1>
                <p>Trash</p>
            <h1>Inner Shell</h1>
                <p>N/A</p>
            <h1>Contents</h1>
                <p>Trash</p>';}
        elseif ($url == '305211234009') {
        echo 
            '<h1>Product</h1>
                <p>Q-Tips</p>
            <h1>Outer Shell</h1>
                <p>Trash</p>
            <h1>Inner Shell</h1>
                <p>N/A</p>
            <h1>Contents</h1>
                <p>Compost</p>';}
        else {
        echo 
            '<p>Hmm... <br>We could not find anything. <br>Try rechecking the barcode.</p>';};
?>


    
    <div class="bottomspace"></div>
    
    <div class="footer">
        
        <div class="footer_left">
            
            <a><img></a>
            <!--- insert home icon --->  
            
        </div>
        
        <div class="footer_right">
            
            <a><img></a>
            <!--- insert question mark icon --->
            
        </div>
        
    </div>
    

    
</body>
        