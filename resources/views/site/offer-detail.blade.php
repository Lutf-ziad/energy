@extends('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page with Owl Carousel</title>

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <style>
    /* Your custom styles go here */
    .owl-carousel {
      /* margin-top: 10%; */
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .owl-carousel img {
      width: 100%; /* Make images fill their container */
      height: auto;
      border-radius: 8px; /* Optional: Add rounded corners to images */
    }
    .owl-carousel .item {
      padding: 10px; /* Optional: Add padding around each item */
      cursor: pointer;
    }
    .owl-carousel .medium img {
      max-width: 400px; /* Set a maximum width for medium-sized images */
    }
    .owl-carousel h3 {
      margin-top: 10px; /* Optional: Add margin to the top of the name */
    }
    .owl-carousel p {
      margin-bottom: 10px; /* Optional: Add margin to the bottom of the details */
    }
  </style>

</head>
<body>

  <!-- Your page content goes here -->
  @foreach($catgory as $catgor)
    <div class="section">
      <div class="embed-responsive embed-responsive-21by9">
        <img src="{{ asset('images/'. $catgor->picture) }}" class="embed-responsive-item">
      </div>

      <div class="content-area">
        <div class="container-fluid mw-1200">
          <h2>{{ $catgor->name }}</h2>
          <p>{{ $catgor->desc }}</p>
          <h4 style="text-align: right">العلامة التجارية / المصنع</h4>
          <p>{{ $catgor->brand }}</p>
        </div>
      </div>
    </div>
  @endforeach
  <h2 style="text-align: center">منتجات ذات صلة</h2>
  <div class="owl-carousel">
      @foreach($products as $product)
      <div class="item medium">
        <img src="{{ asset('images/'.$product->picture) }}" alt="Image 1 Medium">
        <a href="{{ route('product-brand', $product->id,$catgory) }}">
        <h3  style="text-align: center;font-size: 20px">{{ $product->name }}</h3>
        <p style="text-align: center;font-size: 20px">{{ $product->desc }}</p>
        </a>
        {{-- <a href="{{ route('product-detail', $product->id) }}" class="btn">قراه ا/a>لمزيد< --}}
      </div>
    @endforeach
    <!-- Add more slides as needed -->
  </div>

  <div class="brand-sm-icons">
    <h6>الاتصال والمتابعة</h6>
    <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
    <a href="https://www.linkedin.com" target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.instagram.com" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
  </div>

  <!-- Owl Carousel at the bottom of the page -->
  <!-- Owl Carousel JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script>
    // Initialize Owl Carousel
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        items: 3, // Adjust the number of items displayed
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000, // Set autoplay interval in milliseconds
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 4
          }
        }
      });
    });
  </script>

</body>


</html>


@endsection
