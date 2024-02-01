<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Calls the public css -->
    <link rel="stylesheet" href="{{ asset('css/cards-css/card-two-css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar-top/nav-bar-one.css') }}">
</head>
<body>
<div class="navbar">
    <a href="{{ route('welcome') }}">Return Page</a>
    <a href="./css/cards-css/card-two-css.css" Download>Download -> css file (click here)</a>
    <a href="./whole-project/project-two/project.html" Download>Download -> HTML file (click here)</a>    
</div>
</body>
    <div class="container">
        <div class="card-two">     
        <div class="card-two-lines"></div>            
            <div class="card-two-imgBx">
                <!-- <img src="https://source.unsplash.com/random/500x500?sig=1" alt=""> -->
            </div>
            <div class="card-two-content">
            </div>            
        </div>
    </div>
</html>