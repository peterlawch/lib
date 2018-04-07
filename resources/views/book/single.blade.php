@extends('main')

@section('title', '| $post->title')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2 m-t-50">
            <h1 class="title">{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <hr>
            <p>Posted In: {{$post->category->name}}</p>
        </div>
        <div class="visible-print text-center m-t-50" id="printableArea" >
        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->encoding('UTF-8')->generate("http://192.168.0.111/book/695/facebook")) !!}">
            <p>{{ $post->title }}</p>
            <span class="pull-right"><button class="btn btn-default btn-print" type="button"
                onclick="printDiv('printableArea')">
            <i class="fa fa-print"></i> Print</button></span>
        </div>
    </div>
    <script type="text/javascript">
        function printDiv ( divName ) {
            var printContents       = document.getElementById(divName).innerHTML;
            var originalContents    = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>


@endsection