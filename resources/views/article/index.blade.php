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
                <a href="{{ route('articles.destroy', $article) }}" data-confirm="SURE?" data-method="delete" rel="nofollow"
                    class="btn btn-danger">
                    Delete article
                </a>
    @endforeach
@endsection
