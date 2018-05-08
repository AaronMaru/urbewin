@extends('layouts.other')

@section('content')
    <section class="section_3">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-5 mx-auto section_3_img">
                    <img src="{{ url('images/download/picture_1.png') }}" class="img-fluid" height="100px">
                </div>
                <div class="col-lg-5 mx-auto section_3_text">
                    <h2 class="text-faded text-blue mb-5">{{ trans('file.app_section_1_text_1') }}</h2>
                    <p class="text-faded text-blue mb-5">{{ trans('file.app_section_1_text_2') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section_4">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-5 mx-auto section_3_text text-center">
                    {{-- <h2 class="text-faded text-blue mb-5">{{ trans('file.app_section_2_text_1') }}</h2>
                    <p class="text-faded text-blue mb-5">{{ trans('file.app_section_2_text_2') }}</p> --}}
                    <div>
                    <img src="{{ url('img/index/download_app.png') }}" class="img-fluid">
                        <p class="text-faded text-blue mb-5">{{ trans('file.home_section_5_text_3') }}</p>
                        <a href="#" class="btn btn-join-us">{{ trans('file.home_section_5_text_4') }}</a>
                    </div>
                </div>
                <div class="col-lg-5 mx-auto section_3_img">
                    <img src="{{ url('images/download/picture_2.png') }}" class="img-fluid" height="100px">
                </div>
            </div>
        </div>
    </section>
@endsection