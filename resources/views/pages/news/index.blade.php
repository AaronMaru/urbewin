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
<section>
    <div class="container">
            <!-- Project One -->
        @foreach ($news as $new)
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-4 col-md-4">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="{{ url('images/news/' . $new->image) }}" alt="" width="360px" height="240px">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 news-text">
                    @if(App::getLocale()=='zh')
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="news-title">{{ $new->title_zh }}</h3>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="news-date pull-right">{{ $new->created_at->format('Y.m.d') }}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <p class="section-description col-lg-12">{{ str_limit(strip_tags($new->content_zh), 400)  }}</p>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="news-title">{{ $new->title_eng }}</h3>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="news-date pull-right">{{ $new->created_at->format('Y.m.d') }}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <p class="section-description col-lg-12">{{ str_limit(strip_tags($new->content_eng), 400)  }}</p>
                        </div>
                    @endif
                    <a class="btn btn-primary pull-right btn-news" href="{{ url('/news/1') }}">{{ trans('file.btn_read_more') }}  <img src="{{ url('images/news_list/read_more&next_page.png') }}" class="img-fluid" height="33px" width="33px"></a>
                </div>
                <div class="col-lg-1"></div>
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
