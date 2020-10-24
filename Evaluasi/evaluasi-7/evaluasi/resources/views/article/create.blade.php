@extends('layouts.app')

@section('content')
<h1>Create Article </h1>
<div class="card">
    <div class="card-body">
        <form action="/artikel" method="post" enctype="multipart/form-data">
            @csrf
            <x-cate field="category" label="category" type="text"/> 
            <x-input field="title" label="judul" type="text" placeholder="Tulis Judul..." />
            <x-textarea field="subject" label="subject" placeholder="Tulis Article..." />
            <x-inputfile />

            <button type="submit" class="btn btn-outline-dark"><i class="fa fa-pencil"></i></button>
            <a href="/artikel" class="btn btn-sm btn-outline-dark"><i class="fa fa-reply"></i></a>
        </form>
    </div>
</div>

@endsection