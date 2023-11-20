@extends('layout.main')

@section('content')
<article id="post-678" class="post-678 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="history-milestones">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h1 class="heading-title">
                                التقديرات والجوائز
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="history-text">
                            الجوائز العديدة التي حصلت عليها شركة مشاريع الطاقة بكل فخر على مر السنين هي شهادة على تفاني موظفينا والتزامهم بالتميز. وتؤكد هذه الجوائز من جديد طموحنا لمستقبل مليء بالإنجازات القياسية.
                        </div>
                    </div>
                </div>
                @foreach($prize as $prize)
                <div class="history-years">
                    <div class="row place-end">
                        <div class="history">
                            <div class="history-title year1">
                                <div class="dot-line"></div>
                                <div class="history-content">
                                    <div class="title-top">
                                        <div class="history-dot"></div>
                                        <div class="content-set">
                                            {{-- <div class="history-year">1968</div> --}}
                                            <div class="history-text">
                                                <p>  {{$prize->name}}  </p>
                                            </div>
                                            <div class="red-rectangle">
                                                <img decoding="async" src="{{ asset('images/' . $prize->picture) }}" alt="1968 image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- تكرار الهيكل السابق للسنوات الأخرى -->
                </div>
                @endforeach


            </div>
        </div>
    </div><!-- .entry-content -->
</article>
@endsection
