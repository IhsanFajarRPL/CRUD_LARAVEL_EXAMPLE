@extends('layout/main')

@section('title', 'Detail Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Students</h1>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$student->nama}}</h4>
                    <h5 class="card-subtitle mb-2 text-muted">{{$student->nis}}</h5>
                    <br>
                    <p class="card-text">{{$student->email}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>
                    
                    <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{ $student->id }}" method="post" class="my-1 d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/students" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
