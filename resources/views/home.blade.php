@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="p-5 bg-white shadow-sm rounded-3 border-start border-primary border-5">
            <h1 class="display-5 fw-bold text-dark">Dashboard EduCourse</h1>
            <p class="fs-4 text-muted">Selamat datang di sistem manajemen informasi akademik Politeknik Negeri Lampung.</p>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card bg-primary text-white shadow">
            <div class="card-body py-4">
                <h6 class="text-uppercase">Total Mahasiswa</h6>
                <h2 class="display-4 fw-bold">{{ $totalMahasiswa }}</h2>
                <a href="/students" class="text-white text-decoration-none small">Lihat Detail &rarr;</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card bg-success text-white shadow">
            <div class="card-body py-4">
                <h6 class="text-uppercase">Total Dosen</h6>
                <h2 class="display-4 fw-bold">{{ $totalDosen }}</h2>
                <a href="/lecturers" class="text-white text-decoration-none small">Lihat Detail &rarr;</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card bg-warning text-dark shadow">
            <div class="card-body py-4">
                <h6 class="text-uppercase">Mata Kuliah</h6>
                <h2 class="display-4 fw-bold">{{ $totalMatkul }}</h2>
                <span class="small">Semester Genap</span>
            </div>
        </div>
    </div>
</div>
@endsection