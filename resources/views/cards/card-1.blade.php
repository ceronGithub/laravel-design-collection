<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Calls the public css -->
    <link rel="stylesheet" href="{{ asset('css/card-one/card-one-css.css') }}">
</head>
<body>
    <a href="{{ route('welcome') }}" style="margin-top: -300px;">Card design one</a>
    <div class="card-one" style="top: 100px;">
        <div class="card-one-lines"></div>
        <div class="card-one-imgBx">
            <img src="https://source.unsplash.com/random/500x500?sig=201" alt="">
        </div>
        <div class="card-one-content">
            <div class="card-one-details">
                <h2>Ceron Matthew P. Calsena <br><span>Full-Stack web & dekstop developer</span></h2>
                <div class="card-one-data">
                    <h3>Post<br><span>0</span></h3>
                    <h3>followes<br><span>0</span></h3>
                    <h3>follows<br><span>0</span></h3>
                </div>
                <div class="card-one-actionBtn">
                    <button>Contact</button>
                    <button>Message</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>