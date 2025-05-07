@extends('layouts.app')

@section('header', 'Edit article')

@section('content')
    {{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}

    @include('article.form')

    {{ html()->submit('Update')->class('btn btn-primary') }}
    {{ html()->closeModelForm() }}
@endsection
