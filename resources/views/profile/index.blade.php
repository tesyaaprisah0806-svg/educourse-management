@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
            <div class="card-header bg-primary text-white text-center py-4">
                <img src="https://ui-avatars.com/api/?name={{ $profile['nama'] }}&size=100" class="rounded-circle border border-3 border-white mb-2">
                <h4 class="mb-0">{{ $profile['nama'] }}</h4>
                <small>{{ $profile['nim'] }} | {{ $profile['jurusan'] }}</small>
            </div>
            <div class="card-body p-4">
                <h5 class="mb-3">Technical Skills</h5>
                @foreach($profile['skills'] as $skill)
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="fw-bold">{{ $skill['name'] }}</span>
                        <span>{{ $skill['level'] }}%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar {{ $skill['color'] }}" role="progressbar" style="width: {{ $skill['level'] }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection