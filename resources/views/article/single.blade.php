@extends('layouts.app')

@section('content')
    <h1>ini artikel: {{ $article->title }}</h1>
    <p>ini subject artikel : {{ $article->subject }}</p>
            <a href="/artikel/{{ $article->id }}/edit" class="btn btn-info btn-sm">edit</a>
            <form action="/artikel/{{ $article->id }}" method="POST"
                onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm mt-1">Hapus</button>
            </form>
    <a href="/artikel" class="btn btn-info btn-sm text-white">
        << </a>
@endsection
