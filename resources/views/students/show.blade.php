@extends('layout/main')

@section('title', 'Detail Mahasiswa')

@section('container')

  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Detail Mahasiswa</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{ $students->nama }} </h5>
                <h6 class="card-subtitle mb-2 text-muted"> {{ $students->nrp }} </h6>
                <p class="card-text">{{ $students->email }}</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

      </div>
    </div>
  </div>
@endsection
    
