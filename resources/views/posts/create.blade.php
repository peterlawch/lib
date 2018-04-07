@extends('main')

@section('title', '| Create New Book')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.css') !!}

@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2 m-t-20">
            <h1 class="title">Create New Book</h1>
            <hr>
            {!! Form::open(array('route'=> 'posts.store', 'data-parsley-validate' => '')) !!}
                {{ Form::label('title', 'Book Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

                {{ Form::label('category_id', 'Category:')}}
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                    <option value='{{ $category->id}}'>{{ $category->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('tags', 'Tags:') }}
                <select class="form-control select2-selection" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value='{{ $tag->id}}'>{{ $tag->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('body', "Description:") }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'requierd' => '')) }}

                {{ Form::submit('Create Book', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.js') !!}
    {!! Html::script('js/select2.js') !!}
    
    <script type="text/javascript">
        $('.select2-selection').select2();
    </script>

@endsection