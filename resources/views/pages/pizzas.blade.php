@extends ('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h1>Modern Pizza</h1>
            </div>
            {{$type}} - {{$base}} - {{$price}}
        </div>
    </div>    
@endsection
