@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/articles">Articles</a></li>
    <li class="breadcrumb-item active">{{ $article['title'] }}</li>
  </ol>
</nav>

<div class="card shadow-sm p-4">
    <h1 class="fw-bold">{{ $article['title'] }}</h1>
    <p class="text-muted small">Ditulis oleh: {{ $article['author'] }}</p>
    <hr>
    <p class="lead">{{ $article['content'] }}</p>
    <a href="/articles" class="btn btn-secondary mt-3">Kembali ke Daftar Artikel</a>
</div>
@endsection