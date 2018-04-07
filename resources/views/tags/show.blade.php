@extends('main')

@section('title', "| $tag->name Tag")

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1 class="title">{{ $tag->name }} Tag <small>{{  $tag->posts()->count() }}</small> Posts</h1>
        </div>
        <div class="col-md-4 m-t-20 col-md-offset-2">
            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary pull-right">Edit</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Tags</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tag->posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>@foreach ($post->tags as $tag)
                            <span class="label label-info">{{ $tag->name }}</span>
                            @endforeach
                        </td>
                    <td><a href="{{ route('posts.show', $post->id ) }}"class="btn btn-default btn-sm">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
