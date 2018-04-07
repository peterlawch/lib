@extends('main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="colum-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Welcome to SCMC LIBRARY</h1>
                    <p class="lead">Thank you so much for visiting. 非常感谢您的来访. </p>
                    <hr class="my-4">
                    <p>WELCOME TO THE CHRISTIAN PDF BOOKS SECTION OF THE SCMCLIBRARY - AN ONLINE CHRISTIAN RESOURCE CENTER</p>
                    <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                    </p>
                </div>
            </div>
        </div> <!-- end of header .row -->
        <div class="row">
            <div class="col-md-8" >

                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? " ..." : ""}}</p>
                        <a href="{{ url('book/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                    <hr>

                @endforeach

            </div>
            <div class="col-md-3 col-md-offset-1" >
                <h2>Sidebar</h2>    
            </div>
        </div>
@endsection


