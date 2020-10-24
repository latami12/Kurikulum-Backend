@extends('layouts.app')


@section('content')
<div class="card shadow-lg">
    <div class="card-body">
        <img class="card-img-top" src="/image/{{$article->thumbnail}}" alt="card image cap">
        <h1>{{$article->title}}</h1>
        <p>
            {{$article->subject}}
        </p>
        <div class="row m-2">
            <a href="/artikel/{{$article->id}}/edit" class="btn btn-outline-dark mr-1"><i class="fa fa-edit"></i></a>
            <form action="/artikel/{{$article->id}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-dark mr-1"><i class="fa fa-trash"></i></button>
            </form>
            <a href="/artikel" class="btn btn-sm btn-outline-dark"><i class="fa fa-reply"></i></a>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection