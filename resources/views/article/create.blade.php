@extends('layouts.app')

@section('header', 'Create article')

@section('content')
    {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}

    @include('article.form')

    {{ html()->submit('Создать') }}
    {{ html()->closeModelForm() }}
@endsection
