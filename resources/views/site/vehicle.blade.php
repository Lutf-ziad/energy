@extends('layout.main')

@section('content')
    <div class="content-area">
        <div class="container-fluid mw-1200">

            <div class="row">
                <div class="col-lg-6">
                    <div class="brand-detail-info">
                        <h2>ALSVIN</h2>
                        <p>New Appearance Touching your heart Excellent interpretation of contemporary design aesthetics
                            awakening your senses Streamlined body design, dynamic and decent Lenticular headlights, bright
                            as the torch shines LED daytime running lights, unique and eye-catching Exquisite interior
                            design, outstanding taste and extraordinary feeling<br>
                            <br>
                            * Price does not include registration<br>
                            * Prices does not include VAT
                        </p>
                        <!--<p>
                                                        </p>-->
                        <div class="mt-4">
                            <a href="lead.php-5.html?mw=1&brand=Changan&mid=4&model=ALSVIN" class="btn btn-primary mr-3">I'm
                                Interested</a>
                            <a href="test_drive.php-1.html?mw=1&brand=Changan&mid=4&model=ALSVIN" class="btn btn-primary">Test
                                Drive</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brand-colors-slider">
                        <div class="brand-colors-slide" id="brandColorsSlide">
                            <div>
                                <div class="embed-responsive embed-responsive-21by9">
                                    <img src="{{ asset('upload/vehicle/4/color/6.png') }}" alt="" class="embed-responsive-item">
                                </div>
                            </div>
                            <div>
                                <div class="embed-responsive embed-responsive-21by9">
                                    <img src="{{ asset('upload/vehicle/4/color/7.png') }}" alt="" class="embed-responsive-item">
                                </div>
                            </div>
                            <div>
                                <div class="embed-responsive embed-responsive-21by9">
                                    <img src="{{ asset('upload/vehicle/4/color/8.png') }}" alt="" class="embed-responsive-item">
                                </div>
                            </div>
                            <div>
                                <div class="embed-responsive embed-responsive-21by9">
                                    <img src="{{ asset('upload/vehicle/4/color/9.png') }}" alt="" class="embed-responsive-item">
                                </div>
                            </div>
                        </div>
                        <div class="brand-colors-nav" id="brandColorsNav">
                            <div>
                                <div class="embed-responsive embed-responsive-1by1">
                                    <span class="embed-responsive-item" style="background-color: #7f1416;"></span>
                                </div>
                            </div>
                            <div>
                                <div class="embed-responsive embed-responsive-1by1">
                                    <span class="embed-responsive-item" style="background-color: #dfe2e5;"></span>
                                </div>
                            </div>
                            <div>
                                <div class="embed-responsive embed-responsive-1by1">
                                    <span class="embed-responsive-item" style="background-color: #315fac;"></span>
                                </div>
                            </div>
                            <div>
                                <div class="embed-responsive embed-responsive-1by1">
                                    <span class="embed-responsive-item" style="background-color: #b9bdc3;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">
            <div class="brand-engine-info">
                <div class="brand-engine-select">
                    <h3>Engine</h3>
                    <select id="EngineID" name="EngineID" class="form-control w-25 form-control-lg">
                        <option value="22" selected="">1.5</option>
                    </select>
                </div>
                <div id="div-eng22" class="container div-eng">
                    <div class="grades-slider">
                        <div class="grades-slides-nav gradesSliderNav22">
                            <div class="grades-slide-head">
                                <h5>Basic</h5>
                                <h6>37,500 SAR</h6>
                                <h6>43,125 SAR</h6>
                            </div>
                            <div class="grades-slide-head">
                                <h5>FULL</h5>
                                <h6>39,900 SAR</h6>
                                <h6>45,885 SAR</h6>
                            </div>
                        </div>
                        <div class="grades-slides-detail gradesSlidesDetail22">
                            <div class="grades-slide-detail">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>1.5 blue core Engine</li>
                                            <li>Tranmission5 speed DCT</li>
                                            <li>Fuel Tank (L) 45</li>
                                            <li>ESP - Electronic Stability Program</li>
                                            <li>Body Color Door Handle</li>
                                            <li>Electrically Adjustable Outside Mirrors with side repeaters</li>
                                            <li>Front Central Armrest</li>
                                            <li>USB</li>
                                            <li>Power Windows</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>Power (hp) 105</li>
                                            <li>Dimensions (mm) L4,390 x W1,725 x H1,468</li>
                                            <li>Dual Airbag (Driver & Passenger)</li>
                                            <li>HHC - Hill start Hold Control</li>
                                            <li>Front Grille Black</li>
                                            <li>EPS (Electric Power Steering)</li>
                                            <li>Radio</li>
                                            <li>2 Speakers</li>
                                            <li>Manual AC</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>Torque (NM) 145</li>
                                            <li>Wheelbase (mm) 2,535</li>
                                            <li>TPMS - Tire Pressure Monitoring System</li>
                                            <li>14 Steel Wheels</li>
                                            <li>Halogen Headlamps with Electric Height Adjustment</li>
                                            <li>Fabric Seats (Beige)</li>
                                            <li>Bluetooth</li>
                                            <li>Front Reading Light</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grades-slide-detail">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>Rear Prking Sensors</li>
                                            <li>Window Frame Chrome decoration</li>
                                            <li>Steering Mounted Audio Controls</li>
                                            <li>12V Power Supply</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>Reverse View Camera</li>
                                            <li>DRL Daytime Running Lights</li>
                                            <li>Cruise Control</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>15 Alloy Wheels</li>
                                            <li>Sunroof</li>
                                            <li>4 Speakers</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-4">
            <h3>Gallery</h3>
            <div class="fotorama mt-4" data-nav="thumbs" data-width="1200" data-ratio="1200/650" data-max-width="100%"
                data-allowfullscreen="true">
                <img src="{{ asset('upload/vehicle/4/gallery/19.jpg') }}" alt=""><img src="{{ asset('upload/vehicle/4/gallery/20.jpg') }}"
                    alt=""><img src="{{ asset('upload/vehicle/4/gallery/21.jpg') }}" alt=""><img
                    src="{{ asset('upload/vehicle/4/gallery/22.jpg') }}" alt=""><img src="{{ asset('upload/vehicle/4/gallery/23.jpg') }}"
                    alt=""><img src="{{ asset('upload/vehicle/4/gallery/25.jpg') }}" alt=""><img
                    src="{{ asset('upload/vehicle/4/gallery/26.jpg') }}" alt=""><img src="{{ asset('upload/vehicle/4/gallery/27.jpg') }}"
                    alt=""><img src="{{ asset('upload/vehicle/4/gallery/28.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="help-widget">
        <div class="container-fluid mw-1200">
            <h2>NEED HELP FINDING PERFECT CAR ?</h2>
            <p>CALL US NOW</p>
            <a href="tel:" class="btn btn-light btn-lg">92 00 199 92</a>
        </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=&text=Hi%20Changan&source=&data=&app_absent="
        class="float-whatsapp" target="_blank"><i class="fab fa-whatsapp my-float"></i></a>
    <script src="{{ asset('assets/build/app.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {


            $('.gradesSlidesDetail22').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                arrows: false,
                fade: true,
                asNavFor: '.gradesSliderNav22',
            });
            $('.gradesSliderNav22').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: false,
                asNavFor: '.gradesSlidesDetail22',
                dots: false,
                //centerMode: true,
                focusOnSelect: true,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ],
            });


            $(document).on('change', 'select#EngineID', function() {
                var v = $(this).val();
                $('div.div-eng').hide();
                $('div#div-eng' + v).show();
                $('#div-eng' + v + ' .grades-slide-head:first-child').trigger('click');
                $('.gradesSliderNav' + v + ', .gradesSlidesDetail' + v).slick("refresh");
                //$('div#div-eng' + v + ' .gradesSliderNav' + v + ' .grades-slide-head').trigger('click');
            });

            setTimeout(function() {
                $('select#EngineID').trigger('change');
            }, 2000);


        });
    </script>
@endsection
