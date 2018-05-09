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
            <div class="col-md-4">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/400x150" alt="">
                </a>
            </div>
            <div class="col-md-8">
                <h3>Project One</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-primary pull-right btn-news" href="{{ url('/news/1') }}">View Project</a>
            </div>
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