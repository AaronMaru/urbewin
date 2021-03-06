@extends('layouts.home')

@section('content')
<header class="masthead text-center text-white">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <img src="{{ url('images/new_logo/blue.png') }}" class="img-fluid img-banner-logo">
                <h1 class="text-banner-logo">{{ trans('file.image_background_title') }}</h1>
                <p class="mb-5 mini-text-banner-logo">{{ trans('file.image_background_text') }}</p>
                <img src="{{ url('img/index/pull_down.png') }}" class="section_3_img img-fluid">
            </div>
        </div>
    </div>
</header>
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mx-auto text-center">
                <h1 class="section-heading text-bold">{{ trans('file.home_section_1_header') }}</h1>
                <p class="section-text">{{ trans('file.home_section_1_text') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1 mx-auto">
            </div>
            <div class="col-lg-5 mx-auto section_1_text">
                <div class="row">
                    <img src="{{ url('img/index/head_of_text.png') }}" class="img-line img-fluid col-lg-1 remove">
                    <p class="mb-4 col-lg-11  section-description">{{ trans('file.home_section_1_contain_1') }}</p>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <p class="col-lg-11 mb-4  section-description">{{ trans('file.home_section_1_contain_2') }}</p>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <p class="col-lg-11 mb-4  section-description">{{ trans('file.home_section_1_contain_3') }}</p>
                </div>
            </div>
            <div class="col-lg-5 mx-auto">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-1 mx-auto">
            </div>
        </div>
    </div>
</section>
<section class="section_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <img src="{{ url('img/index/picture_1.png') }}" class="img-fluid img-mode col-lg-10">
            <div class="col-lg-1"></div>
        </div>
        <div class="row section_2_row_2">
            <div class="col-lg-4 col-sm-4 col-4">
                <p class="section-text-mini mb-4 text-center first-text">{{ trans('file.home_section_2_text_1') }}</p>
            </div>
            <div class="col-lg-4 col-sm-4 col-4">
                <p class="section-text-mini mb-4 text-center">{{ trans('file.home_section_2_text_2') }}</p>
            </div>
            <div class="col-lg-4 col-sm-4 col-4">
                <p class="section-text-mini mb-4 text-center last-text">{{ trans('file.home_section_2_text_3') }}</p>
            </div>
        </div>
</section>
<section class="section_3">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 mx-auto section_3_img">
                <img src="{{ url('img/index/picture_2.png') }}" class="img-fluid" height="100px">
            </div>
            <div class="col-lg-5 mx-auto section_3_text">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <h1 class="section-heading-mini col-lg-11 text-center">{{ trans('file.home_section_3_header') }}</h1>
                </div>
                <div class="row">
                    <img src="{{ url('img/index/head_of_text.png') }}" class="img-line img-fluid col-lg-1 remove">
                    <p class="text-faded col-lg-11 section-description">{{ trans('file.home_section_3_text_1') }}</p>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <p class="text-faded col-lg-11 section-description">{{ trans('file.home_section_3_text_2') }}</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section class="section_4">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-6 mx-auto section_3_text">
                <div class="row">
                    <h1 class="section-heading-mini-2 col-lg-12 fix-margin text-center">{{ trans('file.home_section_4_header') }}</h1>
                </div>
                <div class="row fix-padding">
                    <img src="{{ url('img/index/head_of_text.png') }}" class="img-line img-fluid col-lg-1 remove">
                    <p class="text-faded section-description col-lg-10 col-12 section-description-fix-margin">{{ trans('file.home_section_4_text_1') }}</p>
                    <div class="col-lg-1 col-12"></div>
                </div>
                <div class="row fix-padding">
                    <div class="col-lg-1"></div>
                    <p class="text-faded section-description col-lg-10 col-12 section-description-fix-margin">{{ trans('file.home_section_4_text_2') }}</p>
                    <div class="col-lg-1 col-12"></div>
                </div>
            </div>
            <div class="col-lg-5 mx-auto section_3_img">
                <img src="{{ url('img/index/picture_3.png') }}" class="img-fluid" height="100px">
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section class="section_5">
    <div class="container my-auto">
        <div class="row fix-no-header-text">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 mx-auto section_3_img">
                <img src="{{ url('img/index/picture_4.png') }}" class="img-fluid dd" height="100%">
            </div>
            <div class="col-lg-5 mx-auto section_3_text text-center">
                <div>
                    <img src="{{ url('img/index/download_whitebook.png') }}" class="img-fluid">
                    <p class="text-faded section-text-mini">{{ trans('file.home_section_5_text_1') }}</p>
                    @if(App::getLocale()=='en')
                        <a href="/file/UWN_White_Paper.pdf" class="btn" download>{{ trans('file.home_section_5_text_2') }}</a>
                    @else
                        <a href="/file/UWN白皮书.pdf" class="btn" download>{{ trans('file.home_section_5_text_2') }}</a>
                    @endif

                </div>
                <br>
                <div>
                    <img src="{{ url('img/index/download_app.png') }}" class="img-fluid">
                    <p class="text-faded section-text-mini">{{ trans('file.home_section_5_text_3') }}</p>
                    <a href="#" class="btn">{{ trans('file.home_section_5_text_4') }}</a>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>

@endsection
