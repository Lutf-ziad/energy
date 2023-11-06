@extends('layouts.main')

@section('content')
    <div class="content-area">
        <div class="container-fluid mw-1200">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="offer-detail.php.html?id=136"><img
                                    src="{{ asset('uploads/new10.jpeg') }}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="offer-detail.php.html?id=136" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="offer-detail.php-1.html?id=131"><img
                                    src="{{ asset('uploads/new9.jpeg') }}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="offer-detail.php-1.html?id=131" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="offer-detail.php-2.html?id=130"><img
                                    src="{{ asset('uploads/new8.jpeg') }}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="offer-detail.php-2.html?id=130" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="{{ url('offer-detail') }}"><img
                                    src="{{ asset('uploads/new4.jpeg') }}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="{{ url('offer-detail') }}" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="{{ url('offer-detail') }}"><img
                                    src="{{ asset('uploads/new5.jpeg') }}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="{{ url('offer-detail') }}" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="{{ url('offer-detail') }}"><img
                                    src="{{ asset('uploads/new6.jpeg') }}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="{{ url('offer-detail') }}" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="{{ url('offer-detail') }}"><img
                                    src="{{ asset('uploads/new7.jpeg') }}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="{{ url('offer-detail') }}" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="{{ url('offer-detail') }}"><img
                                    src="{{ asset('uploads/new8.jpeg') }}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="{{ url('offer-detail') }}" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="offer-box">
                        <div class="embed-responsive embed-responsive-1by1">
                            <a href="{{ url('offer-detail') }}"><img
                                    src="{{ asset('uploads/new9.jpeg') }}" alt=""
                                    class="embed-responsive-item"></a>
                        </div>
                        <a href="{{ url('offer-detail') }}" class="btn btn-outline-primary"><span>مشاهده</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
