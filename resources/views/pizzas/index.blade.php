@extends ('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h1>Modern Pizza</h1>
            </div>
            @foreach ($pizzas as $pizza)
                {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}} {{$pizza->pirce}}<br>
            @endforeach
        </div>
    </div>    
@endsection
