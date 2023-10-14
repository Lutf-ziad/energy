@extends('layout.main')

@section('content')

<div class="container-fluid mw-1200 clearfix">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-xl-9">
            <!-- Media Center Content Section -->
            <div class="am-content-section">
                <a href="./news/32/" class="media-center-featured-news">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="{{ asset('uploads/h1.jpg') }}" class="embed-responsive-item" alt="">
                    </div>
                    <h2 class="text-right"><span>منتج جديد يغزو الأسواق من شركة مشاريع الطاقة</span></h2>
                </a>
                <div class="media-center-list-wrap">
                    <div class="news-content">
                        <div class="media-center-box">
                            <div class="row no-gutters">
                                <div class="col-sm-4">
                                    <div class="media-center-box-thumb">
                                        <img src="{{ asset('uploads/h1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8 align-self-center text-right">
                                    <div class="media-center-box-content">
                                        <h4><a href="news/32/">منتج جديد يغزو الأسواق من شركة مشاريع الطاقة</a></h4>
                                        <p>تبيع توتال إنرجي لعملائها الكهرباء الخضراء المنتجة مباشرة في مواقعهم، من خلال اتفاقيات شراء للطاقة طويلة الأجل، كما تقوم بتطوير وتمويل وبناء وتشغيل منشآت الطاقة الشمسية على الأسطح ومواقف السيارات، بالإضافة إلى الأراضي الصناعية المتاحة.</p>
                                        <div><a href="news/32/" class="btn btn-primary" style="float: right;">قراءة المزيد</a> <span style="font-size: 80%;float: left; margin: 5px;">نشر في 06-03-2022</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-center-box">
                            <div class="row no-gutters">
                                <div class="col-sm-4">
                                    <div class="media-center-box-thumb">
                                        <img src="{{ asset('uploads/new9.jpeg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-8 align-self-center text-right">
                                    <div class ="media-center-box-content">
                                        <h4><a href="news/30/">ما دور البطارية في مجال الطاقة الشمسية</a></h4>
                                        <p>للبطارية دور هام في تخزين الطاقة التي يتم إنتاجها من الألواح الشمسية أو باستخدام شاحن لشحن البطارية من شبكة الكهرباء.</p>
                                        <div><a href="news/29/" class="btn btn-primary" style="float: right;">قراءة المزيد</a> <span style="font-size: 80%;float: left; margin: 5px;">نشر في 20-01-2022</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-pages">
                    <ul class="pagination mt-4 bootpag">
                        <li data-lp="1" class="first disabled"><a href="javascript:void(0);"><span aria-hidden="true">←</span></a></li>
                        <li data-lp="1" class="prev disabled"><a href="javascript:void(0);">«</a></li>
                        <li data-lp="1" class="active"><a href="javascript:void(0);">1</a></li>
                        <li data-lp="2"><a href="javascript:void(0);">2</a></li>
                        <li data-lp="3"><a href="javascript:void(0);">3</a></li>
                        <li data-lp="4"><a href="javascript:void(0);">4</a></li>
                        <li data-lp="5"><a href="javascript:void(0);">5</a></li>
                        <li data-lp="2" class="next"><a href="javascript:void(0);">»</a></li>
                        <li data-lp="7" class="last"><a href="javascript:void(0);"><span aria-hidden="true">→</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-xl-3">
            <!-- Media Center Sidebar -->
            <div class="am-sidebar text-right">
                <div class="sidebar-widget">
                    <h4>الإصدارات</h4>
                    <ul>
                        <li><a href="./newsletter">مجلة رؤية</a></li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h4>الأخبار و الوسائط</h4>
                    <ul>
                        <li>
                            <a href="./media_center">الأخبار</a>
                        </li>
                        <li>
                            <a href="./media_library">الوسائط المتعددة</a>
                        </li>
                        <li>
                            <a href="./contact_us">إتصل بنا</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h4>التواصل الاجتماعي</h4>
                    <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-follow-button twitter-follow-button-rendered" style="position: static; visibility: visible; width: 141px; height: 20px;" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.2b2d73daf636805223fb11d48f3e94f7.ar.html#dnt=false&amp;id=twitter-widget-0&amp;lang=ar&amp;screen_name=enrgy&amp;show_count=false&amp;show_screen_name=true&amp;size=m&amp;time=1696350640027" data-screen-name="EnrgyH"></iframe>
                    <script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <iframe src="https://www.facebook.com/plugins/like.php&amp;width=95&amp;layout=button&amp;action=like&amp;size=small&amp;show_faces=true&amp;share=true&amp;height=30&amp;appId=550643165335545" width="95" height="30" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                </div>
                <div class="sidebar-widget">
                    <h4>قسم التواصل المؤسسي</h4>
                    <p>الاتصالات<br>
                        <a href="tel:+966 1389 5555">+966 13819 8235</a><br>
                        <a href="mailto:info@enrgy.com">info@enrgy.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection

