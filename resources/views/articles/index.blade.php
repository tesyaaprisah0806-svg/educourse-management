@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Articles</li>
  </ol>
</nav>

<div class="row">
    @foreach($articles as $art)
    <div class="col-md-6 mb-3">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5>{{ $art['title'] }}</h5>
                <p class="text-muted small">{{ $art['desc'] }}</p>
                <a href="/articles/{{ $art['slug'] }}" class="btn btn-sm btn-primary">Baca</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection