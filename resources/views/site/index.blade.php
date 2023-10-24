@extends('layout.main')
@section('content')


    <article id="post-55" class="post-55 page type-page status-publish hentry">
        <div class="entry-content">
            <section class="combo-company-growth video-banner">
                <div class="combo-company-growth-wrapper">
                    <div class="container growth-plan-home">
                        <div class="growth-img">
                            <img decoding="async" src={{ asset('uploads/home3-01.jpg') }} >
                            <div class="growth-text">
                             </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="about-us-section about-us-style-2">
                <div class="container">
                    <div class="first-row-wrapper row">
                        <div class="col-lg-12 col-12 about-us ordering-1">
                            <h1 class="sec-title">   شركة مشاريع الطاقة </h1>
                            <div class="about-us-desc">
                             <p> شركة مشاريع الطاقة تقدم مجموعة واسعة من المنتجات عالية الجودة في مجال الطاقة. تتخصص الشركة في توفير بطاريات ذات جودة عالية وأداء ممتاز.تتميز بطاريات شركة مشاريع الطاقة بالموثوقية والكفاءة، مما يسمح للعملاء بتخزين واستخدام الطاقة بشكل فعال. تتوفر مجموعة متنوعة من بطاريات الطاقة، بما في ذلك بطاريات الليثيوم والرصاص الحمضية والنيكل-كادميوم، وتتواجد بطاريات بقدرات مختلفة لتلبية احتياجات مختلف العملاء شركة مشاريع الطاقة بالموثوقية</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="about-specs style-2-about-specs">
                <div class="container">
                    <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl" id="about-specs-slider">
                        <div class="swiper-wrapper blanding-row" id="swiper-wrapper-a35641e911821eb7" aria-live="polite">
                            <div class="swiper-slide blanding-wrap swiper-slide-active" role="group" aria-label="1 / 3" style="width: 379.333px; margin-left: 22px;">
                                <div class="single-wrap">
                                    <div class="title2">فروعنا  </div>
                                    <div class="title1">150<sup>+<sup></div>
                                    <div class="title2">فرع</div>
                                </div>
                            </div>
                            <div class="swiper-slide blanding-wrap swiper-slide-next" role="group" aria-label="2 / 3" style="width: 379.333px; margin-left: 22px;">
                                <div class="single-wrap">
                                    <div class="title2"> موضفينا  </div>
                                    <div class="title1">700<sup>+<sup></sup></sup></div>
                                    <div class="title2">موضف</div>
                                </div>
                            </div>
                            <div class="swiper-slide blanding-wrap" role="group" aria-label="3 / 3" style="width: 379.333px; margin-left: 22px;">
                                <div class="single-wrap">
                                    <div class="title2">سنوات الخبرة </div>
                                        <div class="title1">20<sup>+<sup></sup></sup></div>
                                        <div class="title2">سنه</div>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- .entry-content -->
    </article>
    <div class="news-sec">
    <div class="am-tabs-set-wrap home-tabs-set" dir="rtl">
        <div class="container-fluid mw-1200">
            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                <!--<li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#tab1">ALL</a></li>-->
                <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#tab1">عنا</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tabuni">منتجاتنا</a>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tabchangan">فروعنا</a></li>
                </li><li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tabuni2"> اهدافنا  </a></li>
               </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="tab1">
                <div class="row">
                    <div class="col-md-6 order-md-1 tab-img-col">
                        <img src="{{ asset('uploads/05.png') }}" alt="">
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="p-4">
                            <h4>شركة مشاريع الطاقة</h4>
                            <p>
                                شركة مشاريع الطاقة تقدم مجموعة واسعة من المنتجات عالية الجودة في مجال الطاقة. تتخصص الشركة في توفير بطاريات ذات جودة عالية وأداء ممتاز. بطاريات شركة مشاريع الطاقة تتميز بالموثوقية والكفاءة، مما يسمح للعملاء بتخزين واستخدام الطاقة بشكل فعال. تتوفر مجموعة متنوعة من بطاريات الطاقة، بما في ذلك بطاريات الليثيوم والرصاص الحمضية والنيكل-كادميوم، وتتواجد بطاريات بقدرات مختلفة لتلبية احتياجات مختلف العملاء.
                            </p>
                            <a href="{{ url('detilesNew') }}" class="btn btn-primary">تعرف على المزيد عن شركة مشاريع الطاقة</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tabchangan">
                <div class="row">
                    <div class="col-md-6 order-md-1 tab-img-col">
                        <img src="{{ asset('uploads/hhh.jpg') }}" alt="">
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="p-4">
                            <h4>فروعنا</h4>
                        <p>"نحن نفخر بتقديم خدماتنا عبر أكثر من 150 فرع متواجد في جميع أنحاء المملكة العربية السعودية. توزع هذه الفروع استراتيجيًا لضمان توفر وصول سهل وسريع إلى منتجاتنا وخدماتنا في جميع المدن والمناطق. هذا الانتشار الواسع يعكس التزامنا الراسخ بتلبية احتياجات عملائنا وضمان رضاهم.

                        </p>

                            <a href="./organization_chart" class="btn btn-primary">اعرف المزيد عن فروعنا</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="tabuni">
                <div class="row">
                    <div class="col-md-6 order-md-1 tab-img-col">
                        <img src="{{ asset('uploads/02.png') }}" alt="">
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="p-4">
                            <h4>منتجاتنا</h4>
                            <p>
                                طاقة تضمن الانطلاق
                                تعد بطارية السيارة أحد العناصر الحيوية التي تمكنك من الانطلاق بأمان وثقة في رحلتك. في [شركه مشاريع الطاقه]، نحن نفهم أهمية وجود بطارية قوية وموثوقة تلبي احتياجات سيارتك. لذا، نقدم مجموعة ممتازة من بطاريات السيارات المصممة لتلبية أعلى معايير الأداء والموثوقية.                           </p>
                                <a href="./organization_chart" class="btn btn-primary">اعرف المزيد عن منتجاتنا</a>
                            </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="tabuni2">
                <div class="row">
                    <div class="col-md-6 order-md-1 tab-img-col">
                        <img src="{{ asset('uploads/0.png') }}" alt="">
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="p-4">
                            <h4>  اهدافنا</h4>
                            <p> هدفنا الرئيسي هو تقديم بطاريات السيارات عالية الجودة والأداء. نسعى جاهدين لضمان أن عملائنا يحصلون دائمًا على المنتجات التي تلبي أعلى المعايير والمواصفات.
                                رضا العملاء: نحن نسعى لتحقيق رضا العملاء الدائم. نعمل على تقديم خدمة عملاء استثنائية والاستماع إلى ملاحظات العملاء لضمان تلبية احتياجاتهم وتوقعاتهم.
                                الاعتمادية والاستدامة: نسعى لضمان أن بطارياتنا تكون موثوقة واستدامة لفترة طويلة.

                                </p>
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
    <div class="business-vertical">
        <div class="container-fluid mw-1200">
            <h2>كلمة رئيس مجلس الإدارة</h2>
            <div class="container">
                <div class="business" style="--business-theme-color:#3f4954;">
                    <div class="business-text-right">
                        <div class="business-img-left">
                            <img decoding="async" src="{{ asset('uploads/Compny.jpg') }}">
                        </div>
                        <div class="text-wrapper">
                            <div class="business-title">
                                عبد المجيد شوباص
                            </div>
                            <div class="business-description">
                                تأسست الشركة في عام 1437 بمدينة الرياض وكان الهدف هو تاسيس شركة متخصصة ببيع  البطاريات    في المملكة.
                                ومنذ تأسيسها ، انطلقت ” برؤية واضحة وخطى ثابتة لتحتل مكانتها كشركة رائدة في الاسواق الإقليمية
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <section class="combo-company-growth video-banner">
            <div class="container growth-plan-home">
                <div class="growth-img">
                    <img style="border-radius: 15px;"  decoding="async" src={{ asset('uploads/022-01.png') }} >
                </div>
            </div>
    </section>
    <div class="news-sec">
        <div class="container-fluid mw-1200">
            <h2>آخر الأخبار</h2>
            <div class="new-slider owl-carousel owl-theme owl-loaded owl-drag" id="newsSlider">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1200px, 0px, 0px); transition: all 0.25s ease 0s; width: 4400px;">
                        <!-- Individual News Items -->
                        <!-- 1st News Item -->
                        <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                            <div class="news-box">
                                <a href="{{ url('New') }}" class="news-box-thumb">
                                    <img src="{{ asset('uploads/01.png') }}" alt="معلومة شاملة عن بطارية السيارة">
                                    <span class="fa fa-link"></span>
                                </a>
                                <div class="news-box-info">
                                    <h5><a href="{{ url('New') }}"> بطاريات الرصاص الحمضية</a></h5>
                                     <p>
                                        {{ substr("  هذه البطاريات تعرف أيضًا باسم بطاريات السيارات التقليدية وتستخدم تقنية الرصاص الحمضي. تعتبر رخيصة نسبيًا ومتاحة بشكل واسع. إلا أنها تكون ثقيلة وتحتاج إلى صيانة دورية من حين لآخر.", 0, 200) }}
                                    </p>
                                    <small class="d-block text-muted"><i class="fa fa-calendar-alt"></i> 18-07-2023</small>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                            <div class="news-box">
                                <a href="news.php?id=37" class="news-box-thumb">
                                    <img src="{{ asset('uploads/04.png') }}" alt="معلومة شاملة عن بطارية السيارة">
                                    <span class="fa fa-link"></span>
                                </a>
                                <div class="news-box-info">
                                     <h5><a href="news.php?id=37">بطاريات الجيل الجديد (AGM): </a></h5>
                                    <p>
                                        {{ substr("تستخدم بطاريات AGM تقنية مجففة للحمض وتتميز بأداء أفضل وقوة تحمل أعلى من بطاريات الرصاص الحمضية التقليدية والتي تستخدم عادة في السيارات التي تتطلب أداءً متقدمًا..", 0, 200) }}
                                    </p>
                                    <small class="d-block text-muted"><i class="fa fa-calendar-alt"></i> 18-07-2023</small>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                            <div class="news-box">
                                <a href="news.php?id=37" class="news-box-thumb">
                                    <img src="{{ asset('uploads/08.png') }}" alt="معلومة شاملة عن بطارية السيارة">
                                    <span class="fa fa-link"></span>
                                </a>
                                <div class="news-box-info">
                                    <h5><a href="news.php?id=37">
                                        بطاريات الجيل الجديد (جيل الليثيوم): </a></h5>
                                     <p>
                                        {{ substr("هذه البطاريات تستخدم تقنيات الليثيوم الحديثة وتعرف بأنها بطاريات السيارات الكهربائية. تتميز بوزن أخف وقدرة أعلى على التخزين وتوفير الطاقة. تُستخدم في السيارات الكهربائية والهجينة.", 0, 200) }}
                                    </p>
                                    <small class="d-block text-muted"><i class="fa fa-calendar-alt"></i> 18-07-2023</small>
                                </div>
                            </div>
                        </div>
                      <!-- More similar News Items (Repeat the structure for other news items) -->
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                    {{-- <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button> --}}
                </div>

            </div>
        </div>
    </div>



  </div>

@endsection
