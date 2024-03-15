@extends('layouts.app')

@section('content')
    <h1>hai ini article</h1>
    @foreach ($articles as $article)
        <div class="card mb-1">
            <div class="card-body">
                <p><strong>{{$article->title}} </strong></p>
                <p> {{ $article->subject}}</p>
                <a href="/artikel/{{$article->id}}/edit" class="btn btn-primary">edit</a>
            </div>
        </div>
    @endforeach

    <div>
        {{$articles->links()}}
    </div>
@endsection