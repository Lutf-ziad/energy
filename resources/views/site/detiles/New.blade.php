@extends('layout.main')
@section('content')
<section class="news-first-paragraph">
    <div class="container">
       <div class="highlightednews-section">
          <div class="news-imgs">
             <div class="news1">
                <img src="{{ asset('uploads/01.png') }}" alt="">
             </div>
          </div>
       </div>

       <div class="components-single">
          <div class="heading-title">
            بطاريات الرصاص الحمضية
          </div>
       </div>
       <div class="post-detail">
          <ul class="social-media-list post-share">
             <li>
                <a href="#" target="_blank">
                   <img src="{{ asset('themes/petromin/assets/build/images/news-section/fb.svg') }}" alt="facebook icon">
                </a>
             </li>
             <li>
                <a href="#" target="_blank">
                   <img src="{{ asset('themes/petromin/assets/build/images/news-section/twitter.svg') }}" alt="twitter icon">
                </a>
             </li>
             <li>
                <a href="#" target="_blank">
                   <img src="{{ asset('themes/petromin/assets/build/images/news-section/linkedin.svg') }}" alt="linkedin icon">
                </a>
             </li>
          </ul>
          <div class="main">
             <p>
                هذه البطاريات تعرف أيضًا باسم بطاريات السيارات التقليدية وتستخدم تقنية الرصاص الحمضي. تعتبر رخيصة نسبيًا ومتاحة بشكل واسع. إلا أنها تكون ثقيلة وتحتاج إلى صيانة دورية من حين لآخر.    <br><br>
          </div>
       </div>
    </div>
 </section>
@endsection
