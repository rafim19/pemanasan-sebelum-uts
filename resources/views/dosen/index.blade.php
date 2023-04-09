@extends('layouts.app')

@section('Home')
@section('main')
  <div class="container my-4">
    <h1 class="is-size-3 has-text-weight-bold">Daftar Dosen</h1>
    <hr>
    <div class="is-flex is-justify-content-space-between is-flex-wrap-wrap">
      @foreach ($dosens as $dosen)
        <div class="card is-fullwidth mt-3">
          <div class="card-content">
            <div class="content">
              <h1>{{ $dosen->name }}</h1>
              <p>{{ $dosen->age }} years old</p>
              <p>Major: {{ $dosen->major->name }}</p>
              <p>Faculty: {{ $dosen->major->faculty->name }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection