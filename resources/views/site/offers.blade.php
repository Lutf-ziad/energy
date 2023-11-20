@extends('layout.main')

@section('content')
    <div class="content-area">
        <div class="container-fluid mw-1200">
            <div class="row">
      @foreach($products as $offer)
      <div class="col-sm-6 col-lg-4">
        <div class="offer-box">
            <div class="embed-responsive embed-responsive-1by1">
                <a href="{{ route('offer-detail', $offer->id) }}">
                    <img src="{{ asset('images/' . $offer->picture) }}" alt="" class="embed-responsive-item">
                </a>
            </div>
            <a href="{{ route('offer-detail', $offer->id) }}" class="btn btn-outline-primary">
                <span>مشاهده</span>
            </a>
        </div>
         </div>
     @endforeach
            </div>
        </div>
    </div>
@endsection
