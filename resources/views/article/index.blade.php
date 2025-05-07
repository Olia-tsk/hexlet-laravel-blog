@extends('layouts.app')

@section('messages')
    @if (Session::has('flash_message'))
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('header', 'All articles')

@section('content')
    @foreach ($articles as $article)
        <h2>
            <a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->name }}</a>
        </h2>

        <div>{{ Str::limit($article->body, 200) }}</div>

        <a href="{{ route('articles.edit', ['id' => $article->id]) }}">Edit article</a>
    @endforeach
@endsection
