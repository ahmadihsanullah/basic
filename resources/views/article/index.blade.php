@extends('layouts.app')

@section('content')
    <h1>hai ini article</h1>
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-4">
            <div class="card mb-1">
                <div class="card-body">
                    <p><strong>{{ ucfirst($article->title)}} </strong></p>
                    <p> {{ $article->subject}}</p>
                    <a href="/artikel/{{$article->title}}" class="btn btn-info btn-sm stretched-link">Baca</a>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
       

    <div>
        {{$articles->links()}}
    </div>
@endsection