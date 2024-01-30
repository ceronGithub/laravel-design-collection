<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Demo styles -->
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

    .div-seperator{
        margin-left: 10px;
    }
  </style>

</head>
<body>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>    

    <!-- Swiper -->
    <div class="swiper mySwiperTwo">
        <div class="swiper-wrapper">     
            <div class="swiper-slide">
                <div class="col container" style="width: 100%;">
                    <div style="width: 75%; margin-left: 5%;">
                        <img src="https://source.unsplash.com/random/500x500?sig=110" alt="1"/>
                    </div>
                </div>
                <div class="col" style="margin-left: -10%;">
                    <div class="container">
                        <div class="row">
                            <div class="card mb-3" style="max-width: 700px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="https://source.unsplash.com/random/200x200?sig=111"/>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card mb-3" style="max-width: 700px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://source.unsplash.com/random/200x200?sig=112"/>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div> 
            </div>   

            <div class="swiper-slide">
                <div class="div-seperator">
                    <div class="card" style="width: 20rem;">
                        <img src="https://source.unsplash.com/random/500x500?sig=101" alt="1"/>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="div-seperator">
                    <div class="card" style="width: 20rem;">
                        <img src="https://source.unsplash.com/random/500x500?sig=102" alt="2"/>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="div-seperator">
                    <div class="card" style="width: 20rem;">
                        <img src="https://source.unsplash.com/random/500x500?sig=103" alt="2"/>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="div-seperator">
                    <div class="card" style="width: 20rem;">
                        <img src="https://source.unsplash.com/random/500x500?sig=104" alt="2"/>
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>                               
            </div>

            <div class="swiper-slide">
                <div>
                    <div class="row" style="margin-top: -10px; margin-bottom: 30px;">
                        <div class="col">
                            <div class="card" style="max-width: 430px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="https://source.unsplash.com/random/200x200?sig=105"/>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="max-width: 430px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="https://source.unsplash.com/random/500x500?sig=106" alt="2"/>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="max-width: 430px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="https://source.unsplash.com/random/500x500?sig=107" alt="2"/>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card" style="max-width: 660px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="https://source.unsplash.com/random/500x500?sig=108" alt="2"/>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                        <div class="card" style="max-width: 660px;">
                            <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="https://source.unsplash.com/random/500x500?sig=109" alt="2"/>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">Last page</div>        
        </div>
        <div class="swiper-pagination"></div>        
    </div>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiperTwo", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

    </script>
</body>
</html>