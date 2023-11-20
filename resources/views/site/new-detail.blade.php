@extends('layout.main')

@section('content')
@foreach($prize as $prize) {{-- Use $s as the loop variable --}}
    <div class="embed-responsive embed-responsive-21by9">
        <img src="{{ asset('images/'. $prize->picture ) }}" style="width: 100%; height: 100%; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center;" class="embed-responsive-item">
    </div>

    <div class="content-area">
        <div class="container-fluid mw-1200">
            <h2>{{ $prize->name }}</h2> {{-- Use $->name instead of $offer->name --}}
            <p>
                {{ $prize->descrption }} {{-- Use $->desc instead of $offer->desc --}}
            </p>

            <div class="brand-sm-icons">
                <h6>الاتصال والمتابعة</h6>
                <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com" target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
@endforeach


@endsection
