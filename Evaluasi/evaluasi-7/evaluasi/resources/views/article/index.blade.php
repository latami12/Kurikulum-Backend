@extends('layouts.app')

@section('title', 'Article')



@section('content')

<h2>article</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                @foreach ($articles->chunk(3) as $articleChunk)
                @foreach($articleChunk as $article)
                <div class="card bg-dark text-white mb-2">
                    <img src="/image/{{$article->thumbnail}}" class="card-img" alt="card image cap">
                    <div class="card-img-overlay">
                        <h2 class="card-title">{{ $article->category }}</h2>
                        <h5 class="card-title">{{ ucfirst($article->title) }}</h5>
                        <a href="/artikel/{{$article->slug}}" class=" stretched-link float-sm-left"></a>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="row position-fixed">
                <div class="card border mb-3" style="max-width: 18rem;">
                    <div class="card-header">Navigation</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center " id="tombolTambahData"><a href="/artikel/create" class=" text-decoration-none"><i class="fa fa-pencil-square"></i> | Create</a></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><a href="https://www.bolasport.com/" class=" text-decoration-none"><i class="fa fa-paper-plane"></i> | Link</a></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><a href="/" class=" text-decoration-none"><i class="fa fa-home"></i> | Back Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div>

    {{$articles->links()}}
</div>

@include('layouts.footer')

@endsection

