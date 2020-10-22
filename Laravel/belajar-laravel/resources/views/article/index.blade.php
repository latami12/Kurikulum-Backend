@extends('layouts.app')

@section('title', 'Article')



@section('content')
<nav class="mb-2">
    <a href="/artikel" class="btn btn-outline-dark"><i class="fa fa-folder "></i></a>
    <a href="/artikel/create" class="btn btn-outline-dark"><i class="fa fa-pencil"></i></a>
</nav>
<h1>Halaman Artikel</h4>

    @foreach ($articles->chunk(3) as $articleChunk)
    <div class="row">
        @foreach($articleChunk as $article)
        <div class="col card m-2 shadow-lg">
            <img class="card-img-top" src="/image/{{$article->thumbnail}}" alt="card image cap">
            <div class="card-body">
                <p><strong>{{ ucfirst($article->title) }}</strong></p>
                <p>{{$article->subject}} </p>
                <a href="/artikel/{{$article->slug}}" class="btn btn-outline-dark stretched-link"><i class="fa fa-book"></i></a>
                
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
    <div>

        {{$articles->links()}}
    </div>
    
    @include('layouts.footer')

    @endsection