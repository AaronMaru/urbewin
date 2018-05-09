@extends('layouts.other')

@section('content')
     <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center join-us">
                    <h2 class="section-heading text-blue">{{ trans('file.join_us_header') }}</h2>
                    <p class="text-blue mb-4">{{ trans('file.join_us_header_text') }}</p>
                </div>
            </div>
            <div class="row justify-content-around join-us-card">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem; height: 32rem">
                        <div class="card-body  text-center">
                            <div class="card-title mx-auto'">{{ trans('file.join_us_card_1_header') }}</div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/city.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_1_header_picture_1') }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/people.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_1_header_picture_2') }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/salary.png') }}" alt="Card image cap">
                                    <p class="card-text">400 USD</p>
                                </div>
                            </div>

                            <hr>
                            <p class="card-text-header">{{ trans('file.join_us_card_1_body_header') }}</p>
                            <p class="card-text">{{ trans('file.join_us_card_1_body_text') }}</p>
                            <hr>
                            <p class="card-text-header">{{ trans('file.join_us_card_1_decription_header') }}</p>
                            <p class="card-text-requirement">{{ trans('file.join_us_card_1_decription_text_1') }}</p>
                            <p class="card-text-requirement">{{ trans('file.join_us_card_1_decription_text_2') }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-join-us">{{ trans('file.join_us_card_button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem; height: 32rem">
                        <div class="card-body  text-center">
                            <div class="card-title mx-auto'">{{ trans('file.join_us_card_2_header') }}</div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/city.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_2_header_picture_1') }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/people.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_2_header_picture_2') }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/salary.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_2_header_picture_3') }}</p>
                                </div>
                            </div>

                            <hr>
                            <p class="card-text-header">{{ trans('file.join_us_card_2_body_header') }}</p>
                            <p class="card-text">{{ trans('file.join_us_card_2_body_text') }}</p>
                            <hr>
                            <p class="card-text-header">{{ trans('file.join_us_card_2_decription_header') }}</p>
                            <p class="card-text-requirement">{{ trans('file.join_us_card_2_decription_text_1') }}</p>
                            <p class="card-text-requirement">{{ trans('file.join_us_card_2_decription_text_2') }}</p>
                        </div>
                         <div class="card-footer text-center">
                            <a href="#" class="btn btn-join-us">{{ trans('file.join_us_card_button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around join-us-card">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem; height: 32rem">
                        <div class="card-body  text-center">
                            <div class="card-title mx-auto'">{{ trans('file.join_us_card_3_header') }}</div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/city.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_3_header_picture_1') }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/people.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_3_header_picture_2') }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/salary.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_3_header_picture_3') }}</p>
                                </div>
                            </div>

                            <hr>
                            <p class="card-text-header">{{ trans('file.join_us_card_3_body_header') }}</p>
                            <p class="card-text">{{ trans('file.join_us_card_3_body_text') }}</p>
                            <hr>
                            <p class="card-text-header">{{ trans('file.join_us_card_3_decription_header') }}</p>
                            <p class="card-text-requirement">For Overseas Marketing:</p>
                            <p class="card-text-requirement">{{ trans('file.join_us_card_3_decription_text_1') }}</p>
                            <p class="card-text-requirement">For Overseas Marketing:</p>
                            <p class="card-text-requirement">{{ trans('file.join_us_card_3_decription_text_2') }}</p>
                        </div>
                         <div class="card-footer text-center">
                            <a href="#" class="btn btn-join-us">{{ trans('file.join_us_card_button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem; height: 32rem">
                        <div class="card-body  text-center">
                            <div class="card-title mx-auto'">{{ trans('file.join_us_card_4_header') }}</div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/city.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_4_header_picture_1') }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/people.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_4_header_picture_2') }}</p>
                                </div>
                                <div class="col-lg-4">
                                    <img class="img-join-us" src="{{ url('images/join_us/salary.png') }}" alt="Card image cap">
                                    <p class="card-text">{{ trans('file.join_us_card_4_header_picture_3') }}</p>
                                </div>
                            </div>

                            <hr>
                            <p class="card-text-header">{{ trans('file.join_us_card_4_body_header') }}</p>
                            <p class="card-text">{{ trans('file.join_us_card_4_body_text') }}</p>
                            <hr>
                            <p class="card-text-header">{{ trans('file.join_us_card_4_decription_header') }}</p>
                            <p class="card-text-requirement">{{ trans('file.join_us_card_4_decription_text_1') }}</p>
                            <p class="card-text-requirement">{{ trans('file.join_us_card_4_decription_text_2') }}</p>
                        </div>
                         <div class="card-footer text-center">
                            <a href="#" class="btn btn-join-us">{{ trans('file.join_us_card_button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection