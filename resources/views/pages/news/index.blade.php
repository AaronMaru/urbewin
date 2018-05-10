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
        @foreach ($news as $new)
            <div class="row">
                <div class="col-md-4">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/400x150" alt="">
                    </a>
                </div>
                <div class="col-md-8">
                    @if(App::getLocale()=='zh')
                        <h3>{{ $new->title_zh }}</h3>
                        <p>{{ $new->content_zh }}</p>
                    @else
                        <h3>{{ $new->title_eng }}</h3>
                        <p>{{ $new->content_eng }}</p>
                    @endif
                    <a class="btn btn-primary pull-right btn-news" href="{{ url('/news/1') }}">View Project</a>
                </div>
            </div>

        @endforeach
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
