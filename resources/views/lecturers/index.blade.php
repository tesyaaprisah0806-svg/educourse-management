@extends('layouts.app')

@section('content')
<div class="card shadow-sm mt-4">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Daftar Dosen Informatika</h5>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Bidang Keahlian</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lecturers as $l)
                <tr>
                    <td>{{ $l['nidn'] }}</td>
                    <td>{{ $l['name'] }}</td>
                    <td><span class="badge bg-info text-dark">{{ $l['expertise'] }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection