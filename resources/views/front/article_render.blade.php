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