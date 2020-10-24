@extends('layouts.app')


@section('content')
<div class="card shadow-lg">
    <div class="card-body">
        <img class="card-img-top" src="/image/{{$show->thumbnail}}" alt="card image cap">
        <h1>{{$show->title}}</h1>
        <p>
            {{$show->subject}}
        </p>
        

    </div>
</div>
@include('layouts.footer')
@endsection