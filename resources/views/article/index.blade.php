@extends('layouts.app')

@section('title', 'ini halaman artikel')

@section('content')
    <h1>hai ini article</h1>
        @foreach ($articles->chunk(3) as $articleChunk)
            <div class="row">
                @foreach($articleChunk as $article)
                <div class="col card mb-1 mx-1">
                    <div class="card-body">
                        <p><strong>{{ ucfirst($article->title)}} </strong></p>
                        <p> {{ $article->subject}}</p>
                        <a href="/artikel/{{$article->slug}}" class="btn btn-info btn-sm stretched-link">Baca</a>
                        
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