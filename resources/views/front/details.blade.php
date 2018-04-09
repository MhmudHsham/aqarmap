@extends("layouts.front")
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section("page_scripts")
<script type="text/javascript" src="{{ url('assets/front/mine/article_details.js') }}"></script>
@stop
@section("content")
<div class="col-md-8">

    <h1 class="my-4">Article Data
    </h1>

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">{{ $details->title }}</h2>
            <p class="card-text">{{ $details->content }}</p>
        </div>
        <div class="card-footer text-muted">
            Posted on {{ date("F d, Y", strtotime($details->created_at)) }}

        </div>
    </div>

    <h4 class="my-4">Leave your comment here    </h4>
    <div class="col-md-10 my-4">
        <form action="" method="" id="form-comment">
            <input type="hidden" id="article_id" value="{{ $id }}" />
            <div class="col-md-12">
                <div class="col-md-3">Name</div>
                <div class="col-md-9">
                    <input type="text" id="name" name="" value="" class="form-control" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-3">Comment</div>
                <div class="col-md-9">
                    <textarea name="comment" id="comment" cols="20" rows="6" class="form-control"></textarea>
                </div>
                <div class="col-md-2 mt-4 mb-4">
                    <button type="submit" class="btn btn-info" >Save</button>
                </div>
                <div>
                    <p style="display: none;" id="error" class="alert alert-danger"></p>
                </div>
            </div>

        </form>
    </div>


    <h4 class="my-4">All Comments    </h4>
    <div id="all-comments">
        @foreach($comments as $one)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">{{ $one->name }}</h5>
                <p class="card-text">{{ $one->comment }}</p>
            </div>
        </div>
        @endforeach
    </div>




</div>


@stop