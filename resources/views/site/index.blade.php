@extends('layout.main')
@section('content')


    <section class="combo-company-growth video-banner">
        <div class="combo-company-growth-wrapper">
            <div class="container growth-plan-home">
                <section class="combo-company-growth video-banner">
                    <div class="combo-company-growth-wrapper">
                        <div class="container growth-plan-home">
                            <div class="hm-slider-wrap">
                                <div class="hm-slider owl-carousel owl-theme" id="hmSlider">
                                    <div class="hm-slide">
                                        <img src="{{ asset('uploads/blog/slider.jpeg') }}" alt="hvh" class="hm-slide-banner">
                                        <div class="hm-slide-content">
                                            <p>مرحبا بكم شركه مشاريع الطاقه</p>
                                        </div>
                                    </div>
                                    <div class="hm-slide">
                                        <img src="{{ asset('uploads/slider1.jpeg') }}" alt="" class="hm-slide-banner">
                                        <div class="hm-slide-content">
                                             <p>مرحبا في شركه مشاريع الطاقه</p>
                                        </div>
                                    </div>
                                    <div class="hm-slide">
                                        <img src="{{ asset('uploads/home.jpg') }}" alt="" class="hm-slide-banner">
                                        <div class="hm-slide-content">
                                             <p>مرحبا في شركه مشاريع الطاقه</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <div class="page-sec welcome-sec">
        <div class="container-fluid mw-1200  ">
                 <h1 class="sec-title">مرحبا بكم في شركة مشاريع الطاقة </h1>
                 <div class="about-us-desc">
                    <p> شركة مشاريع الطاقة تقدم مجموعة واسعة من المنتجات عالية الجودة في مجال الطاقة. تتخصص الشركة في توفير بطاريات ذات جودة عالية وأداء ممتاز.تتميز بطاريات شركة مشاريع الطاقة بالموثوقية والكفاءة، مما يسمح للعملاء بتخزين واستخدام الطاقة بشكل فعال. تتوفر مجموعة متنوعة من بطاريات الطاقة، بما في ذلك بطاريات الليثيوم والرصاص الحمضية والنيكل-كادميوم، وتتواجد بطاريات بقدرات مختلفة لتلبية احتياجات مختلف العملاء شركة مشاريع الطاقة بالموثوقية</p>
                </div>
         </div>
    </div>


    <div class="news-sec">
    <div class="am-tabs-set-wrap home-tabs-set" dir="rtl">
        <div class="container-fluid mw-1200">
            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                <!--<li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#tab1">ALL</a></li>-->
                <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#tab1">عن الشركه</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tabchangan">فروعنا</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tabuni">النشرة الإخبارية</a>
                </li><li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tabuni2">ملف الشركة</a></li>                        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="tab1">
                <div class="row">
                    <div class="col-md-6 order-md-1 tab-img-col">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ asset('uploads/video.mp4') }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="p-4">
                            <h4>شركة مشاريع الطاقة</h4>
                            <p>شركة مشاريع الطاقة تقدم مجموعة واسعة من المنتجات عالية الجودة في مجال الطاقة. تتخصص الشركة في توفير بطاريات ذات جودة عالية وأداء ممتاز. بطاريات شركة مشاريع الطاقة تتميز بالموثوقية والكفاءة، مما يسمح للعملاء بتخزين واستخدام الطاقة بشكل فعال. تتوفر مجموعة متنوعة من بطاريات الطاقة، بما في ذلك بطاريات الليثيوم والرصاص الحمضية والنيكل-كادميوم، وتتواجد بطاريات بقدرات مختلفة لتلبية احتياجات مختلف العملاء.</p>
                            <a href="./overview" class="btn btn-primary">تعرف على المزيد عن شركة مشاريع الطاقة</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tabchangan">
                <div class="row">
                    <div class="col-md-6 order-md-1 tab-img-col">
                        <img src="{{ asset('uplods/hhh.jpg') }}" alt="">
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="p-4">
                            <h4>فروعنا</h4>
                            <p>تفخر شركتنا بتواجد أكثر من 150 ً فرعا منتشرة في جمیع أنحاء المملكة العربیة السعودیة. نحن نقدم خدماتنا ومنتجاتنا الاستثنائیة في
                                ًا وراء انتشارنا الواسع ونجاحنا المتواصل.
                                ًا رئیسی
                                مجالنا، والتي تعتبر سبب
                            </p>
                            <a href="./organization_chart" class="btn btn-primary">اعرف المزيد عن فروعنا</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="tabuni">
                <div class="row">
                    <div class="col-md-6 order-md-1 tab-img-col">
                        <img src="https://test.lar.u4e.net/uploads/home.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="p-4">
                            <h4>النشرة الإخبارية "صورة"</h4>
                            <p>صورة ، النشرة الإخبارية ، النشر بواسطة مكتب الاتصالات المؤسسية.</p>
                            <a href="./newsletter" class="btn btn-primary">اكتشف واقرأ جميع إصدارات الصور</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="tabuni2">
                <div class="row">
                    <div class="col-md-6 order-md-1 tab-img-col">
                        <img src="https://test.lar.u4e.net/uploads/h2.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="p-4">
                            <h4>ملف الشركة</h4>
                            <p>شركة مشاريع الطاقة تقدم مجموعة واسعة من المنتجات عالية الجودة في مجال الطاقة. تتخصص الشركة في توفير بطاريات ذات جودة عالية وأداء ممتاز. تتميز بطاريات شركة مشاريع الطاقة بالموثوقية والكفاءة، مما يسمح للعملاء بتخزين واستخدام الطاقة بشكل فعال.</p>
                            <a href="http://www.example.org" target="_blank" class="btn btn-primary">تعرف على المزيد</a>
                        </div>
                    </div>
                </div>

            </div>
           </div>
          </div>
        </div>
    </div>
    <div class="news-sec">
        <div class="container-fluid mw-1200">
            <h2>اخر الاخبار</h2>

             <div class="new-slider owl-carousel owl-theme" id="newsSlider">
                     <div class="news-box">
                        <a href="" class="news-box-thumb">
                            <img src="{{ asset('uploads/new10.jpeg') }}"  >
                            <span href="{{ url('new_details') }}" class="fa fa-link"></span>
                        </a>
                        <div class="news-box-info">
                            <h5><a href=" ">معلومه شامله عن بطاريه السياره</a></h5>
                            <p> {{ substr("تعتبر بطارية السيارة من أنواع البطاريات القابلة للشحن ومهمتها تشغيل المحرّك الكهربائي، أو ما يُعرف بالدينامو الذي يكون في العادة مسؤولاً عن تشغيل محرّك السيارة التقليدي، أي محرك الاحتراق الداخلي سواءً كان يعمل بالديزل أو البنزين. وبالإضافة إلى ذلك، يتوجب على البطارية أن توفر الطاقة اللازمة لإنارة مقصورة السيارة الداخلية والمصابيح الخارجية. سنتحدث في هذا المقال عن معلومات عن بطارية السيارة من الألف إلى ", 0, 200) }} </p>
                            <small class="d-block text-muted"><i class="fa fa-calendar-alt"></i> 12:57 PM </small>
                        </div>
                    </div>
                    <div class="news-box">
                        <a href="" class="news-box-thumb">
                            <img src="{{ asset('uploads/new9.jpeg') }}"  >
                            <span href=" " class="fa fa-link"></span>
                        </a>
                        <div class="news-box-info">
                            <h5><a href=" ">معلومه شامله عن بطاريه السياره</a></h5>
                            <p> {{ substr("تعتبر بطارية السيارة من أنواع البطاريات القابلة للشحن ومهمتها تشغيل المحرّك الكهربائي، أو ما يُعرف بالدينامو الذي يكون في العادة مسؤولاً عن تشغيل محرّك السيارة التقليدي، أي محرك الاحتراق الداخلي سواءً كان يعمل بالديزل أو البنزين. وبالإضافة إلى ذلك، يتوجب على البطارية أن توفر الطاقة اللازمة لإنارة مقصورة السيارة الداخلية والمصابيح الخارجية. سنتحدث في هذا المقال عن معلومات عن بطارية السيارة من الألف إلى ", 0, 200) }} </p>
                            <small class="d-block text-muted"><i class="fa fa-calendar-alt"></i>  12:57 PM </small>
                        </div>
                    </div>
                    <div class="news-box">
                        <a href="{{ url('new_details') }}" class="news-box-thumb">
                            <img src="{{ asset('uploads/new8.jpeg') }}"  >
                            <span href=" " class="fa fa-link"></span>
                        </a>
                        <div class="news-box-info">
                            <h5><a href=" ">معلومه شامله عن بطاريه السياره</a></h5>
                            <p> {{ substr("تعتبر بطارية السيارة من أنواع البطاريات القابلة للشحن ومهمتها تشغيل المحرّك الكهربائي، أو ما يُعرف بالدينامو الذي يكون في العادة مسؤولاً عن تشغيل محرّك السيارة التقليدي، أي محرك الاحتراق الداخلي سواءً كان يعمل بالديزل أو البنزين. وبالإضافة إلى ذلك، يتوجب على البطارية أن توفر الطاقة اللازمة لإنارة مقصورة السيارة الداخلية والمصابيح الخارجية. سنتحدث في هذا المقال عن معلومات عن بطارية السيارة من الألف إلى ", 0, 200) }} </p>
                            <small class="d-block text-muted"><i class="fa fa-calendar-alt"></i>  12:57 PM </small>
                        </div>
                    </div>
                    <div class="news-box">
                        <a href="" class="news-box-thumb">
                            <img src="{{ asset('uploads/new7.jpeg') }}"  >
                            <span href=" " class="fa fa-link"></span>
                        </a>
                        <div class="news-box-info">
                            <h5><a href=" ">معلومه شامله عن بطاريه السياره</a></h5>
                            <p> {{ substr("تعتبر بطارية السيارة من أنواع البطاريات القابلة للشحن ومهمتها تشغيل المحرّك الكهربائي، أو ما يُعرف بالدينامو الذي يكون في العادة مسؤولاً عن تشغيل محرّك السيارة التقليدي، أي محرك الاحتراق الداخلي سواءً كان يعمل بالديزل أو البنزين. وبالإضافة إلى ذلك، يتوجب على البطارية أن توفر الطاقة اللازمة لإنارة مقصورة السيارة الداخلية والمصابيح الخارجية. سنتحدث في هذا المقال عن معلومات عن بطارية السيارة من الألف إلى ", 0, 200) }} </p>
                            <small class="d-block text-muted"><i class="fa fa-calendar-alt"></i>   12:57 PM</small>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <div class="news-sec">
        <div class="container-fluid mw-1200">
                         <h2>الجوائز وشهادات التقدير</h2>
                         <div class="d-flex align-items-center">
                <a href="{{ url('lead') }}" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Award', '', '{{asset('uploads/111-01-01-01.png')}}', 1)">
                    <img id="Award" src="{{asset('uploads/2114-01.png')}}" alt=""></a>
            </div>
            <hr>
        </div>
    </div>
    <div class="news-sec">
        <div class="container-fluid mw-1200">
            <h2> احصائياتنا  </h2>
            <section class="about-specs style-2-about-specs">
                <div class="container">
                    <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl" id="about-specs-slider">
                        <div class="swiper-wrapper blanding-row" id="swiper-wrapper-0a4581e84eb6b786" aria-live="polite">
                                                            <div class="swiper-slide blanding-wrap swiper-slide-active" role="group" aria-label="1 / 3" style="width: 379.333px; margin-left: 22px;">
                                    <div class="single-wrap">
                                        <div class="title2">نعمل في</div>
                                        <div class="title1">5</div>
                                        <div class="title2">مناطق</div>
                                    </div>
                                </div>
                                                            <div class="swiper-slide blanding-wrap swiper-slide-next" role="group" aria-label="2 / 3" style="width: 379.333px; margin-left: 22px;">
                                    <div class="single-wrap">
                                        <div class="title2">عبر</div>
                                        <div class="title1">40<sup>+<sup></sup></sup></div>
                                        <div class="title2">دولة</div>
                                    </div>
                                </div>
                                                            <div class="swiper-slide blanding-wrap" role="group" aria-label="3 / 3" style="width: 379.333px; margin-left: 22px;">
                                    <div class="single-wrap">
                                        <div class="title2">مع</div>
                                        <div class="title1">6000<sup>+<sup></sup></sup></div>
                                        <div class="title2">زميل</div>
                                    </div>
                                </div>
                                                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </section>
    </div>
  </div>
    <div class="offers-sec">
        <div class="container-fluid mw-1200">
            <h2>عروض خاصة</h2>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="offer-detail.php.html?id=136"><img
                                    src="{{asset('uploads/new10.jpeg')}}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="{{ url('offer-detail') }}" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="offer-detail.php-1.html?id=131"><img
                                    src="{{asset('uploads/new7.jpeg')}}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="offer-detail.php-1.html?id=131" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="offer-detail.php-2.html?id=130"><img
                                    src="{{asset('uploads/new6.jpeg')}}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="offer-detail.php-2.html?id=130" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="offer-detail.php-3.html?id=129"><img
                                    src="{{asset('uploads/new10.jpeg')}}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="offer-detail.php-3.html?id=129" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
