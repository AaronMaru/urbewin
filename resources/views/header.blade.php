@extends('layouts.app')

@section('content')
<header class="masthead text-center text-blue d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
              <img src="{{ url('img/index/banner_logo.png') }}">
            </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
            </div>
        </div>
    </div>
</header>
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-blue">We've got what you need!</h2>
                <p class="text-blue mb-4">Start Bootstrap has everything you need to get your new website up and running in no time!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1 mx-auto">
            </div>
            <div class="col-lg-5 mx-auto">
                <p class="text-blue mb-4">Start Bootstrap has everything you need to get your new website up and running in no time!</p>
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
</section>
<section class="section_3">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-5 mx-auto section_3_img">
                <img src="{{ url('img/index/picture_2.png') }}" class="img-fluid" height="100px">
            </div>
            <div class="col-lg-5 mx-auto section_3_text">
                <p class="text-faded text-blue mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
            </div>
        </div>
    </div>
</section>
<section class="section_4">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-5 mx-auto section_3_text">
                <p class="text-faded text-blue mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
            </div>
            <div class="col-lg-5 mx-auto section_3_img">
                <img src="{{ url('img/index/picture_2.png') }}" class="img-fluid" height="100px">
            </div>
        </div>
    </div>
</section>
<section class="section_5">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-5 mx-auto section_3_img">
                <img src="{{ url('img/index/picture_2.png') }}" class="img-fluid" height="100px">
            </div>
            <div class="col-lg-5 mx-auto section_3_text">
                <p class="text-faded text-blue mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
            </div>
        </div>
    </div>
</section>
<section class="section_6">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-5 mx-auto text-center">
                <p class="text-faded text-blue mb-5">Start Bootstrap can help you build better</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-1 mx-auto text-center">
                <img src="{{ url('img/index/WeChat.jpg') }}" class="img-fluid" height="100px">
                <p class="text-faded text-blue mb-5">Wechat</p>
            </div>
            <div class="col-lg-1 mx-auto text-center">
                <img src="{{ url('img/index/fb.jpg') }}" class="img-fluid" height="100px">
                <p class="text-faded text-blue mb-5">Facebook</p>
            </div>
            <div class="col-lg-1 mx-auto text-center">
                <img src="{{ url('img/index/Twitter.jpg') }}" class="img-fluid" height="100px">
                <p class="text-faded text-blue mb-5">Twitter</p>
            </div>
            <div class="col-lg-1 mx-auto text-center">
                <img src="{{ url('img/index/telegram.jpg') }}" class="img-fluid" height="100px">
                <p class="text-faded text-blue mb-5">Telegram</p>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
@endsection