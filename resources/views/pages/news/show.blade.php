@extends('layouts.other')
@section('content')
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center join-us">
            </div>
        </div>
    </div>
</section>
<section class="bg-primary">
    <div class="container">
            <!-- Project One -->
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-8">
                <h3 class="news-show-title">{{ $news->title_zh }}</h3>
                <p class="news-date">{{ $news->created_at->format('Y.m.d') }}</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0 float-right" src="{{ url('images/news/' . $news->image) }}" alt="" width="180px" height="180px">
                </a>
            </div>
            <div class="col-lg-1"></div>
        </div>
        <div class="row news-description">
            <div class="col-lg-1 col-md-10"></div>
            <div class="col-lg-10 col-md-10">
                <h3 class="section-description">{{ $news->content_zh}}</h3>
            </div>
            <div class="col-lg-1 col-md-10"></div>
        </div>
    </div>
</section>
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center join-us">
            </div>
        </div>
    </div>
</section>
@endsection
