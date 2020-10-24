@extends('layouts.app')

@section('content')
<h1>Update Article </h1>
<div class="card">
    <div class="card-body">

        <form action="/artikel/{{$article->id}} " method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <x-cate field="category" label="category" type="text" />
            <x-input field="title" label="judul" type="text" placeholder="Tulis Judul..." value="{{$article->title}} " />
            <x-textarea field="subject" label="subject" placeholder="Tulis Article..." value="{{$article->subject}}" />
            @if ($article->thumbnail)
            <img src="/image/{{$article->thumbnail}}" width="150">
            @else
            <p>Kamu belum punya thumbnail</p>
            @endif
            <x-inputfile />

            <!-- <div class="form-group">
                <label for="title" class="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title') ? old('title') : $article->title }} ">
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        
            <div class="form-group">
                <label for="subject">Subject</label>
                <textarea class="form-control" name="subject" id="subject" rows="3">{{old('subject') ? old('subject') : $article->subject}}</textarea>
            </div>
            @error('subject')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->

            <button type="submit" class="btn btn-outline-dark"><i class="fa fa-edit"></i></button>
            <a href="/artikel" class="btn btn-sm btn-outline-dark"><i class="fa fa-reply"></i></a>
        </form>
    </div>
</div>

@endsection