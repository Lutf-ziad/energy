@extends('layout.main')

@section('content')
    {{-- <div class="content-area">
        <div class="container-fluid mw-1200">
            <div class="row">
      @foreach($products as $offer)
      <div class="col-sm-6 col-lg-4">
        <div class="offer-box">
            <div class="embed-responsive embed-responsive-1by1">
                <a href="{{ route('offer-detail', $offer->id) }}">
                    <img src="{{ asset('images/' . $offer->picture) }}" alt="" class="embed-responsive-item">
                </a>
            </div>
            <a href="{{ route('offer-detail', $offer->id) }}" class="btn btn-outline-primary">
                <span>مشاهده</span>
            </a>
        </div>
         </div>
     @endforeach
            </div>
        </div>
    </div> --}}
    <!DOCTYPE html>
    <html lang="ar" dir="ltf">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

.container{
    /* background:linear-gradient(45deg, blueviolet, lightgreen); */
    /* padding:15px 9%; */
    padding-bottom: 100px;
}

.container .heading{
    text-align: center;
    padding-bottom: 15px;
    color:#fff;
    text-shadow: 0 5px 10px rgba(0,0,0,.2);
    font-size: 50px;
}

.container .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap:15px;
}

.container .box-container .box{
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
    border-radius: 5px;
    background: #fff;
    text-align: center;
    padding:30px 20px;
}

/* .container .box-container .box img{ */
    /* height: 80px;
} */

.container .box-container .box h3{
    color:#444;
    font-size: 22px;
    padding:10px 0;
}

.container .box-container .box p{
    color:#777;
    font-size: 15px;
    line-height: 1.8;
}

.container .box-container .box .btn{
    margin-top: 10px;
    display: inline-block;
    background:#333;
    color:#fff;
    font-size: 17px;
    border-radius: 5px;
    padding: 8px 25px;
}

.container .box-container .box .btn:hover{
    letter-spacing: 1px;
}

.container .box-container .box:hover{
    box-shadow: 0 10px 15px rgba(0,0,0,.3);
    transform: scale(1.03);
}

@media (max-width:768px){
    .container{
        padding:20px;
    }
}
     </style>
    </head>
    <body>

    <div class="container">

        <h1 class="heading">brand</h1>

        <div class="box-container">
            @foreach($products as $product)
            <div class="box">
                <img src="{{ asset('images/'.$product->picture ) }}" alt="">
                <h3>{{ $product->name }}</h3>
                 {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p> --}}
                <a href="{{ route('product-detail', $product->id) }}" class="btn">قراه المزيد</a>
            </div>
            @endforeach

        </div>

    </div>

    </body>
    </html>

@endsection
