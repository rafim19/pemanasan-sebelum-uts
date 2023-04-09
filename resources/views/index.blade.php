@extends('layouts.app')

@section('Home')
@section('main')
    <div class="container my-4">
        <h1 class="is-size-3 has-text-weight-bold">Dashboard</h1>
        <hr>
        <div class="is-flex is-justify-content-space-between">
            <div class="card">
                <a href="{{ route('dosen.index') }}">
                    <div class="card-content">
                        <div class="content">
                            <h1>Jumlah Dosen</h1>
                            <p>{{ $dosens }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="{{ route('major.index') }}">
                    <div class="card-content">
                        <div class="content">
                            <h1>Jumlah Jurusan</h1>
                            <p>{{ $majors }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="{{ route('faculty.index') }}">
                    <div class="card-content">
                        <div class="content">
                            <h1>Jumlah Fakultas</h1>
                            <p>{{ $faculties }}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection