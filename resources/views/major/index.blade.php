@extends('layouts.app')

@section('Home')
@section('main')
  <div class="container my-3">
    <h1 class="is-size-3 has-text-weight-bold">Daftar Jurusan</h1>
    <hr>
    <div class="is-flex is-justify-content-space-between is-flex-wrap-wrap">
      @foreach ($majors as $major)
        <div class="card is-fullwidth mt-3">
          <div class="card-content">
            <div class="content">
              <h1>{{ $major->name }}</h1>
              <p>Faculty: {{ $major->faculty->name }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection