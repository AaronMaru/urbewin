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
    <div class="container text-blue">
        <!-- Project One -->
        <form action="{{ route('news.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlInput1">Title Chiness</label>
                <input type="text" name="title_zh" class="form-control" id="exampleFormControlInput1" placeholder="Title here">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content Chiness</label>
                <textarea name="content_zh" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Title Eng</label>
                <input type="text" name="title_eng" class="form-control" id="exampleFormControlInput1" placeholder="Title here">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content Eng</label>
                <textarea name="content_eng" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
             <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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