@extends('layouts.app')

@section('Home')
@section('main')
  <div class="container my-4">
    <h1 class="is-size-3 has-text-weight-bold">Daftar Fakultas</h1>
    <hr>
    <div class="is-flex is-justify-content-space-between is-flex-wrap-wrap">
      @foreach ($faculties as $faculty)
        <div class="card is-fullwidth mt-3">
          <div class="card-content">
            <div class="content">
              <h1>{{ $faculty->name }}</h1>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection