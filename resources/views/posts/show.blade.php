@extends('main')

@section('title', '| View Book List')

@section('content')

    <div class="row m-t-50">
        <div class="col-md-7">
            <h1 class="title">{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
            <hr>
            <div class="tags">
                @foreach ($post->tags as $tag)
                    <label class="label label-default">{{ $tag->name }}</label>
                @endforeach

            </div>
            
        </div>
        <div class="visible-print text-center col-md-1 id="printableArea" >
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->encoding('UTF-8')->generate("http://192.168.0.111/book/695/facebook")) !!}">
                    <p>{{ $post->title }}</p>
                    <span class="pull-right"><button class="btn btn-default btn-print" type="button"
                        onclick="printDiv('printableArea')">
                    <i class="fa fa-print"></i> Print</button></span>
            </div>
        
        <div class="col-md-4">
            <div class="jumbotron">
                
                <dl class="dl-horizontal">
                    <label>Url:</label>
                    <p><a href="{{ route('book.single', $post->slug) }}">{{ route('book.single', $post->slug) }}</a></p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Category:</label>
                    <p>{{ $post->category->name }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Created At:</label>
                    <p>{{ date('M j, Y H:ia', strtotime($post->created_at)) }}</p>
                </dl>
                
                <dl class="dl-horizontal">
                    <label>Last Updated:</label>
                    <p>{{ date('M j, Y H:ia', strtotime($post->updated_at)) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
                        
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                        
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                    
                        {!! Form::close() !!}
                    </div>
                </div>
                
                <div class="row">
                    <div>
                        {{ Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
    

@endsection