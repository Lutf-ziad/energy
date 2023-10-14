@extends('layout.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Slider with Separated Background</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Create a container for the slider */
        .slider-container {
            position: relative;
            max-width: 100%; /* Make the container full width */
            margin: 0 auto;
            padding: 0;
            text-align: center;
        }

        /* Style the slider */
        .slider {
            margin-top: 5%;
            display: inline-block;
            padding: 20px; /* Add padding to the slider */
             border-radius: 10px;

             background-color: rgba(255, 255, 255, 0.2); /* Background for the slider */
            position: relative;
              width: 100%;
              margin-top: 5%;
            border-radius: 10px;
         }

        /* Style the slider images */
        .slider img {
             height: auto;
            width: 50%;
            margin-top: -5%;
            margin-left: 30%;
           border-radius: 10px;
         }

        /* Create a separated slider background */
        .slider-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50%; /* Half the height of the slider images */
            background: url({{asset('uploads/banner1.jpeg')}})  ;
            background-size: cover;
            opacity: 0.8; /* Adjust the opacity as needed */
            z-index: -1; /* Place behind the slider */
        }
    </style>
</head>
<body>
    <!-- Create a container div for the slider -->
    <div class="slider-container">
        <!-- Create the slider div -->
        <div class="slider">
            <!-- Background for the slider -->
            <div class="slider-background"></div>

            <!-- Add slider images here -->
            <img src={{ asset('uploads/blog/slider.jpeg') }} alt="Slider Image 1">
            <img src={{ asset('uploads/slider1.jpeg') }} alt="Slider Image 2">
            <img src={{ asset('uploads/slider2.jpeg') }} alt="Slider Image 3">
            <!-- Add more images as needed -->
        </div>
    </div>

    <!-- Include JavaScript for the slider functionality -->
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.querySelectorAll('.slider img');
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = 'block';
            setTimeout(showSlides, 2000); // Change slide every 2 seconds
        }
    </script>
</body>
</html>
@endsection
