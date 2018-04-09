@extends("layouts.front")
@section("page_scripts")
<script type="text/javascript" src="{{ url('assets/front/mine/articles.js') }}"></script>
@stop
@section("content")
<div class="col-md-8">

    <h1 class="my-4">All Articles
    </h1>

    <div id="articles-area">
        @foreach($articles as $one)
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">{{ $one->title }}</h2>
                <p class="card-text">{{ mb_substr($one->content, 0, 150) }}</p>
                <a href="{{ url('/articles/details/'.$one->id."/".str_replace(" ", "-", $one->title)) }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {{ date("F d, Y", strtotime($one->created_at)) }}

            </div>
        </div>
        @endforeach
    </div>


</div>

<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @foreach($categories as $key => $one)
                        @if($key %2 == 0)
                        <li class="mb-4">
                            <a href="{{ $one->id }}" class="btn btn-info category">{{ $one->title }}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @foreach($categories as $key => $one)
                        @if($key %2 != 0)
                        <li class="mb-4">
                            <a href="{{ $one->id }}" class="btn btn-info category">{{ $one->title }}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>



@stop