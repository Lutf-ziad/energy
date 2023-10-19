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
                                                <p>      Top Custopmer</p>
                                            </div>
                                            <div class="red-rectangle">
                                                <img decoding="async" src="{{ asset('uploads/honor.jpg') }}" alt="1968 image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mobile-content-center">
                        <div class="history row-reverse">
                            <div class="history-title year2 reverse">
                                <div class="dot-line"></div>
                                <div class="history-content">
                                    <div class="title-top row-reverse">
                                        <div class ="history-dot"></div>
                                        <div class="content-set">
                                            {{-- <div class="history-year">1969</div> --}}
                                            <div class="history-text">
                                                <p>   الشركه الالمانيه لصناعه البطاريات    </p>
                                            </div>
                                            <div class="red-rectangle">
                                                <img decoding="async" src="{{ asset('uploads/n.jpg') }}" alt="1969 image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                <p>           Champain Award for 2022</p>
                                            </div>
                                            <div class="red-rectangle">
                                                <img decoding="async" src="{{ asset('uploads/n2.jpg') }}" alt="1968 image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- تكرار الهيكل السابق للسنوات الأخرى -->
                </div>


            </div>
        </div>
    </div><!-- .entry-content -->
</article>

@endsection
