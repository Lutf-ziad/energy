@extends('layout.main')

@section('content')
<article id="post-1536" class="post-1536 page type-page status-publish hentry">

    <div class="entry-content">
        <section class="our-growth-title">
            <div class="locator">
                <div class="services-and-promotions">
                    <div class="container">
                        <h1 class="title-promotions">
                            روّادنا
                        </h1>
                        <div class="sous-title">
                            <p class="title">نحقق المستقبل بقيادة روّاد فاعلين يتشاركون <span class="green-text">نفس الأفكار والطمحات المستقبلية</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @foreach($teme as $tem)
        <div class="business-vertical leadership-cards">
            <div class="container">
                <div class="business">
                    <div class="business-text-right">
                        <div class="business-img-left">
                            <div class="business-img-inner-left">
                                <img decoding="async" src="{{ asset('images/' . $tem->picture) }}" alt="لايوجد صورة">
                            </div>
                        </div>
                        <div class="text-wrapper">
                            <div class="business-title">
                                {{ $tem->name }}
                            </div>
                            <div class="business-designation">
                                {{ $tem->jop }}
                            </div>
                            <div class="business-description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div><!-- .entry-content -->
</article><!-- #post-## -->

@endsection
