<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #333;     
    }
    .card-one{
        position: relative;
        width: 350px;
        height: 190px;
        background: #fff;
        transition: 0.5s;
    }
    /* change card size */
    .card-one:hover{
        height: 330px;
        /* width: 530px; */
    }
    .card-one .card-one-lines{
        position: absolute;
        inset: 0;
        background: #000;   
        overflow: hidden;     
    }
    .card-one .card-one-lines::before{
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 600px;
        height: 120px;
        background: linear-gradient(transparent, #45f3ff, #45f3ff, #45f3ff, transparent);
        animation: animate 4s linear infinite;
    }
    @keyframes animate{
        0%{
            transform: translate(-50%, -50%) rotate(0deg);
        }
        100%{
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    .card-one .card-one-lines:after{
        content: '';
        position: absolute;
        inset: 3px;
        background: #292929;
    }

    .card-one .card-one-imgBx{
        position: absolute;
        top: -30%;
        left: 50%;
        transform: translateX(-50%);
        width: 150px;
        height: 150px;
        background: #000;
        transition: 0.5s;
        overflow: hidden;        
    }

    /* adjust img box */
    .card-one:hover .card-one-imgBx{
        width: 220px;
        height: 220px;
    }

    .card-one .card-one-imgBx::before{
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 500px;
        height: 150px;
        transform: translate(-50%, -50%);
        background: linear-gradient(transparent, #ff3c7b, #ff3c7b, #ff3c7b, transparent);
        animation: animate2 6s linear infinite;
    }

    @keyframes animate2{
        0%{
            transform: translate(-50%, -50%) rotate(360deg);
        }
        100%{
            transform: translate(-50%, -50%) rotate(0deg);
        }
    }

    .card-one .card-one-imgBx::after{
        content: '';
        position: absolute;
        inset: 2px;
        background: #292929;
    }

    .card-one .card-one-imgBx img{
        position: absolute;
        top:10px;
        left:10px;
        z-index: 1;
        width: calc(100% - 20px);
        height: calc(100% - 20px);
        filter: grayscale(1);
    }

    .card-one .card-one-content{
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: flex-end;
        overflow: hidden;
    }

    .card-one .card-one-content .card-one-details{
        padding: 40px;
        text-align: center;
        width: 100%;
        transition: 0.5s;
        transform: translateY(125px);
    }

    .card-one:hover .card-one-content .card-one-details{
        transform: translateY(0px);
    }

    .card-one .card-one-content .card-one-details h2{
        font-size: 1.25em;
        font-weight: 600;
        color: #45f3ff;
        line-height: 1.2em;
    }

    .card-one .card-one-content .card-one-details h2 span{
        font-size: 0.75em;
        font-weight: 500;
        color: #fff;
    }

    .card-one .card-one-content .card-one-details .card-one-data{
        display: flex;
        justify-content: space-between;
        margin: 10px 0;
    }

    .card-one .card-one-content .card-one-details .card-one-data h3{
        font-size: 1em;
        color: #45f3ff;
        line-height: 1.2em;
        font-weight: 600;
    }

    .card-one .card-one-content .card-one-details .card-one-data h3 span{
        font-size: 0.85em;
        font-weight: 400;
        color: #fff;
    }

    .card-one .card-one-content .card-one-details .card-one-actionBtn{
        display: flex;
        justify-content: space-between;
        gap: 20px;
    } 

    .card-one .card-one-content .card-one-details .card-one-actionBtn button{
        padding: 10px 30px;
        border: none;
        outline: none;
        border-radius: 5px;
        font-size: 1em;
        font-weight: 500;
        background: #45f3ff;
        color: #222;
        cursor: pointer;
    }

    .card-one .card-one-content .card-one-details .card-one-actionBtn button:nth-child(2){
        background: #fff;
    }
    </style>
</head>
<body>
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