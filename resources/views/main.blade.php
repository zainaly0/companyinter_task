<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header_main">
        @include('header')
        <hr>
        <div class="main">
            <h1 class="main_heading">Discover. Learn. {{ $value }} </h1>
            <p class="main_p">playform for creatives arount the world </p>
            <div class="search_bar">
                <i class="fa fa-search"></i>
                <input type="search" name="" id=""
                    placeholder="Design, Code, Finance, Marketing"><button>search</button>
            </div>

            <div class="cart_container">
                <div class="cart">
                    <div class="cart_" style="background-color: white;">
                        <div class="cart_heading">
                            <div>Web Design</div>
                            <div>14</div>
                        </div>
                        <div>
                            <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptate porro
                                repudiandae
                                exercitationem itaque, rem magnam cum explicabo reprehenderit eligendi!</div>
                            <div><img src="" alt="error"></div>
                        </div>
                    </div>
                    <div class="cart_"
                        style="background: linear-gradient(70deg, rgba(76, 88, 102, 1) 0%, rgba(192, 194, 238, 1) 100%);">
                        <div class="cart_heading">
                            <div>finance</div>
                            <div>14</div>
                        </div>
                        <div>
                            <div>quisquam atque a tempore repellat doloribus ea nesciunt dolores ullam! Excepturi
                                adipisci
                                obcaecati facere laboriosam. Voluptatum, fugiat in.</div>
                            <div><img src="" alt="error"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>
