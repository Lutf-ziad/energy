@extends('layout.main')
@section('content')
<div class="container-fluid mw-1200">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <img src="{{ asset('images/' . $newsArticle->picture) }}" alt="" class="embed-responsive-item">
            </div>
            <div class="p-5">
                <h3>{{ $newsArticle->name }}</h3>
                <small class="d-block text-muted"><i class="fa fa-calendar-alt"></i> {{ $newsArticle->created_at }}</small>
                <br>
                {{ $newsArticle->descrption }}
            </div>
        </div>
    </div>
</div>

@endsection
