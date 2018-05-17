@extends('layouts.other')

@section('content')
    <section class="app-section-1">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mx-auto section_3_img">
                    <img src="{{ url('images/download/picture_1.png') }}" class="img-fluid" height="100px">
                </div>
                <div class="col-lg-5 mx-auto app-section-1-text">
                    <h1 class="text-faded section-heading text-center">{{ trans('file.app_section_1_header') }}</h1>
                    <p class="text-faded app-section-text-mini text-center">{{ trans('file.app_section_1_text') }}</p>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>
    <section class="section_4">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 mx-auto app-section-2-text text-center">
                    <div>
                    <img src="{{ url('img/index/download_app.png') }}" class="img-fluid">
                        <p class="text-faded text-blue">{{ trans('file.app_section_2_header') }}</p>
                        <a href="#" class="btn">{{ trans('file.app_section_2_text') }}</a>
                    </div>
                </div>
                <div class="col-lg-5 mx-auto section_3_img">
                    <img src="{{ url('images/download/picture_2.png') }}" class="img-fluid" height="100px">
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>
@endsection
