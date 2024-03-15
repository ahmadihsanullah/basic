@extends('layouts.app')

@section('content')
    <h1>Bikin Artikel Baru</h1>
    <form action="/artikel" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="masukan title" name="title" value="{{old('title')}}">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <textarea class="form-control" id="subject" rows="3" name="subject">{{old('subject')}}</textarea>

            @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
