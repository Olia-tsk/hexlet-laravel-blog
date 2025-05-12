@extends('layouts.app')

@section('messages')
    @if (Session::has('flash_message'))
        <div class="container">
            <div class="alert alert-success" role="alert">
                {{ Session::get('flash_message') }}
            </div>
        </div>
    @endif
@endsection

@section('header', 'All articles')

@section('content')
    @foreach ($articles as $article)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('articles.show', $article) }}">{{ $article->name }}</a>
                </h5>
                <p class="card-text">
                <div>{{ Str::limit($article->body, 200) }}</div>
                </p>
                <a href="{{ route('articles.edit', $article) }} " class="btn btn-primary">
                    Edit article
                </a>
                <a href="{{ route('articles.destroy', $article) }}" data-confirm="SURE?" data-method="delete" rel="nofollow"
                    class="btn btn-danger">
                    Delete article
                </a>
            </div>
        </div>
    @endforeach
@endsection
