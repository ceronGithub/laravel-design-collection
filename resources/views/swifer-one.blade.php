<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        html,
        body {
        position: relative;
        height: 100%;
        }

        body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
        }

        .swiper {
        width: 100%;
        height: 100%;
        }

        .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        }                 
    </style>
</head>
<body>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <!-- Start Swiper -->
    <div class="swiper mySwiperOne">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="https://source.unsplash.com/random/500x500?sig=1" />
        </div>
        <div class="swiper-slide">
            <img src="https://source.unsplash.com/random/500x500?sig=2" />
        </div>
        <div class="swiper-slide">
            <img src="https://source.unsplash.com/random/500x500?sig=3" />
        </div>
        <div class="swiper-slide">
            <img src="https://source.unsplash.com/random/500x500?sig=4" />
        </div>
        <div class="swiper-slide">
            <img src="https://source.unsplash.com/random/500x500?sig=5" />
        </div>
        <div class="swiper-slide">
            <img src="https://source.unsplash.com/random/500x500?sig=6" />
        </div>
        <div class="swiper-slide">
            <img src="https://source.unsplash.com/random/500x500?sig=7" />
        </div>
        <div class="swiper-slide">
            <img src="https://source.unsplash.com/random/500x500?sig=8" />
        </div>
        <div class="swiper-slide">
            <img src="https://source.unsplash.com/random/500x500?sig=9" />
        </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!-- End Swiper -->

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiperOne", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
    </script>
</body>
</html>