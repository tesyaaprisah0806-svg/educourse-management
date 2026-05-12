@extends('layouts.app')

@section('content')
<div class="card shadow-sm mt-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Daftar Mahasiswa Manajemen Informatika</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>NPM</th>
                    <th>Nama Lengkap</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $s)
                <tr>
                    <td>{{ $s['npm'] }}</td>
                    <td>{{ $s['name'] }}</td>
                    <td>{{ $s['class'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection