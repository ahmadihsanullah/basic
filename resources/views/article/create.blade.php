@extends('layouts.app')

@section('content')
    <h1>Bikin Artikel Baru</h1>
    <form action="/artikel" method="POST">
        @csrf
        <x-input field="title" label="Judul" type="text" placeholder="Tulis judul...."/>
        <x-textarea field="subject" label="Subject"/>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
