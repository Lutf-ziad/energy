@extends('layout.main')

@section('content')
    <div class="embed-responsive embed-responsive-21by9">
        <img src="{{ asset('upload/cms/page/2/banner.jpg?a=1') }}" alt="" class="embed-responsive-item">
    </div>


    <div class="content-area">
        <div class="container-fluid mw-1200">
            <h2>Almajdouie Motors Authorized Changan Distributor</h2>
            <p>In the Chinese language, CHANG means lasting and AN means safety. Therefore, CHANG AN together represents the
                idea of “Lasting Safety”. We sincerely hope that Changan will bring you both safety and happiness.<br>
                <br>
                As one of the top four automobile groups in China and the top selling domestic Chinese automotive brand,
                Changan Automobile boasts an industrial history stretching back 153 years. With 32 years of experience in
                building and selling passenger vehicles, Changan is an early leader in the Chinese auto industry.<br>
                <br>
                Changan launched its first production vehicle in 1959 when it began building the Changjiang Type 46 vehicle,
                under contract to the Chinese government. The Changjiang was China’s very first production vehicle. In 1959,
                the Changjiang made its first public appearance at the People’s Republic of China’s 10th anniversary
                parade.<br>
                <br>
                Each day, more than 8,500 consumers buy a new Changan. With 6,000 sales and service facilities in more than
                60 countries, and more than 150,000 professional team members globally, we stand ready to provide you
                considerate and prompt service 24 hours a day.
            </p>
            <div class="brand-sm-icons">
                <h6>CONNECT AND FOLLOW</h6>
                <a href="https://www.facebook.com/Changan_ksa-794545360650837/?fref=ts" target="_blank" class="facebook"><i
                        class="fab fa-facebook-f"></i></a><a href="https://twitter.com/Changan_ksa" target="_blank"
                    class="twitter"><i class="fab fa-twitter"></i></a><a href="https://www.linkedin.com/company/888521/"
                    target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a><a
                    href="https://www.instagram.com/Changan_ksa/" target="_blank" class="instagram"><i
                        class="fab fa-instagram"></i></a><a href="https://www.youtube.com/channel/UCYLnWfApU3iKrKJiq-7U5Kw"
                    target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
            </div>

            <div class="alm-tabs brands-tabs">
                <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#tab1">
                            ALL</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab"
                            href="#tabchangan">Changan</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tabuni">UNI</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1">
                        <h2>CHANGAN</h2>
                        <h3>Sedan</h3>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php.html?vehicleID=4&vehicle=ALSVIN"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="{{ asset('upload/vehicle/4/smallimage.png') }}" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php.html?vehicleID=4&vehicle=ALSVIN">ALSVIN</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-1.html?vehicleID=50&vehicle=EADO PLUS"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/50/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-1.html?vehicleID=50&vehicle=EADO PLUS">EADO PLUS</a></h5>
                                </div>
                            </div>
                        </div>
                        <h3>SUV</h3>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-2.html?vehicleID=6&vehicle=CS35 Plus"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/6/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-2.html?vehicleID=6&vehicle=CS35 Plus">CS35 Plus</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-3.html?vehicleID=51&vehicle=CS75 PLUS"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/51/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-3.html?vehicleID=51&vehicle=CS75 PLUS">CS75 PLUS</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-4.html?vehicleID=29&vehicle=CS85"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/29/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-4.html?vehicleID=29&vehicle=CS85">CS85</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-5.html?vehicleID=8&vehicle=CS95"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/8/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-5.html?vehicleID=8&vehicle=CS95">CS95</a></h5>
                                </div>
                            </div>
                        </div>
                        <h3>Truck</h3>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-6.html?vehicleID=46&vehicle=Hunter"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/46/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-6.html?vehicleID=46&vehicle=Hunter">Hunter</a></h5>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h2>UNI</h2>
                        <h3>Sedan</h3>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-7.html?vehicleID=67&vehicle=UNI-V"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/67/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-7.html?vehicleID=67&vehicle=UNI-V">UNI-V</a></h5>
                                </div>
                            </div>
                        </div>
                        <h3>SUV</h3>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-8.html?vehicleID=65&vehicle=UNI-K"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/65/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-8.html?vehicleID=65&vehicle=UNI-K">UNI-K</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-9.html?vehicleID=66&vehicle=UNI-T"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/66/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-9.html?vehicleID=66&vehicle=UNI-T">UNI-T</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabchangan">
                        <h3>Sedan</h3>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php.html?vehicleID=4&vehicle=ALSVIN"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/4/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php.html?vehicleID=4&vehicle=ALSVIN">ALSVIN</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-1.html?vehicleID=50&vehicle=EADO PLUS"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/50/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-1.html?vehicleID=50&vehicle=EADO PLUS">EADO PLUS</a></h5>
                                </div>
                            </div>
                        </div>
                        <h3>SUV</h3>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-2.html?vehicleID=6&vehicle=CS35 Plus"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/6/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-2.html?vehicleID=6&vehicle=CS35 Plus">CS35 Plus</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-3.html?vehicleID=51&vehicle=CS75 PLUS"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/51/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-3.html?vehicleID=51&vehicle=CS75 PLUS">CS75 PLUS</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-4.html?vehicleID=29&vehicle=CS85"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/29/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-4.html?vehicleID=29&vehicle=CS85">CS85</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-5.html?vehicleID=8&vehicle=CS95"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/8/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-5.html?vehicleID=8&vehicle=CS95">CS95</a></h5>
                                </div>
                            </div>
                        </div>
                        <h3>Truck</h3>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-6.html?vehicleID=46&vehicle=Hunter"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/46/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-6.html?vehicleID=46&vehicle=Hunter">Hunter</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabuni">
                        <h3>Sedan</h3>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-7.html?vehicleID=67&vehicle=UNI-V"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/67/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-7.html?vehicleID=67&vehicle=UNI-V">UNI-V</a></h5>
                                </div>
                            </div>
                        </div>
                        <h3>SUV</h3>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-8.html?vehicleID=65&vehicle=UNI-K"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/65/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-8.html?vehicleID=65&vehicle=UNI-K">UNI-K</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="brand-car-col">
                                    <a href="vehicle.php-9.html?vehicleID=66&vehicle=UNI-T"
                                        class="embed-responsive embed-responsive-21by9">
                                        <img src="upload/vehicle/66/smallimage.png" alt=""
                                            class="embed-responsive-item">
                                    </a>
                                    <h5><a href="vehicle.php-9.html?vehicleID=66&vehicle=UNI-T">UNI-T</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="help-widget">
        <div class="container-fluid mw-1200">
            <h2>NEED HELP FINDING PERFECT CAR ?</h2>
            <p>CALL US NOW</p>
            <a href="tel:920019992" class="btn btn-light btn-lg">92 00 199 92</a>
        </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=&text=Hi%20Changan&source=&data=&app_absent=" class="float-whatsapp"
        target="_blank"><i class="fab fa-whatsapp my-float"></i></a>
    <script src="assets/build/app.min.js"></script>
@endsection
