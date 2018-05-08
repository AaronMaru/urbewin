@extends('layouts.home')

@section('content')
<header class="masthead text-center text-blue d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
              <img src="{{ url('img/index/banner_logo.png') }}" class="section_3_img img-fluid">
            </h1>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">{{ trans('file.image_background_title') }}</p>
                <p class="text-faded mb-5">{{ trans('file.image_background_text') }}</p>
            </div>
        </div>
    </div>
</header>
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-blue">{{ trans('file.home_section_header') }}</h2>
                <p class="text-blue mb-4">{{ trans('file.home_section_text') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1 mx-auto">
            </div>
            <div class="col-lg-5 mx-auto">
                <p class="text-blue mb-4">{{ trans('file.home_section_contain_1') }}</p>
                <p class="text-blue mb-4">{{ trans('file.home_section_contain_2') }}</p>
                <p class="text-blue mb-4">{{ trans('file.home_section_contain_3') }}</p>
            </div>
            <div class="col-lg-5 mx-auto">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <img src="{{ url('img/index/picture_1.png') }}" class="img-fluid">
        </div>
        <div class="row">
            <div class="col-lg-4">
                <p class="text-blue mb-4 text-center">{{ trans('file.home_section_picture_1') }}</p>
            </div>
            <div class="col-lg-4">
                <p class="text-blue mb-4 text-center">{{ trans('file.home_section_picture_2') }}</p>
            </div>
            <div class="col-lg-4">
                <p class="text-blue mb-4 text-center">{{ trans('file.home_section_picture_3') }}</p>
            </div>
        </div>
</section>
<section class="section_3">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-5 mx-auto section_3_img">
                <img src="{{ url('img/index/picture_2.png') }}" class="img-fluid" height="100px">
            </div>
            <div class="col-lg-5 mx-auto section_3_text">
                <h2 class="text-blue text-center">{{ trans('file.home_section_3_header') }}</h2>
                <p class="text-faded text-blue mb-5">{{ trans('file.home_section_3_text_1') }}</p>
                <p class="text-faded text-blue mb-5">{{ trans('file.home_section_3_text_2') }}</p>
            </div>
        </div>
    </div>
</section>
<section class="section_4">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-5 mx-auto section_3_text">
                <h2 class="text-blue text-center">{{ trans('file.home_section_4_header') }}</h2>
                <p class="text-faded text-blue mb-5">{{ trans('file.home_section_4_text_1') }}</p>
                <p class="text-faded text-blue mb-5">{{ trans('file.home_section_4_text_2') }}</p>
            </div>
            <div class="col-lg-5 mx-auto section_3_img">
                <img src="{{ url('img/index/picture_3.png') }}" class="img-fluid" height="100px">
            </div>
        </div>
    </div>
</section>
<section class="section_5">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-5 mx-auto section_3_img">
                <img src="{{ url('img/index/picture_4.png') }}" class="img-fluid" height="100px">
            </div>
            <div class="col-lg-5 mx-auto section_3_text text-center">
                <div>
                    <img src="{{ url('img/index/download_whitebook.png') }}" class="img-fluid">
                    <p class="text-faded text-blue mb-5">{{ trans('file.home_section_5_text_1') }}</p>
                    <a href="#" class="btn btn-join-us">{{ trans('file.home_section_5_text_2') }}</a>
                </div>
                <div>
                    <img src="{{ url('img/index/download_app.png') }}" class="img-fluid">
                    <p class="text-faded text-blue mb-5">{{ trans('file.home_section_5_text_3') }}</p>
                    <a href="#" class="btn btn-join-us">{{ trans('file.home_section_5_text_4') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection