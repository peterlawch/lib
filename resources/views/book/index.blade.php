@extends('main')

@section('title', '| Books')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2 m-t-20">
            <h1 class="title m-b-20">Books List</h1>
        </div>

    </div>

    @foreach ($posts as $post)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1><strong>{{ $post->title }}</strong></h1>
            <h5 class="m-t-10">Published: {{ date('M j, Y', strtotime('$post->created_at')) }}</h5>

            <p class="m-b-20">{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? ' ...' : "" }}</p>

            <a href="{{ url('book/'.$post->slug) }}" class="btn btn-primary">Read More</a>
            <hr>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>


@endsection