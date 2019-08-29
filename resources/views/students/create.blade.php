@extends('layout/main')

@section('title', 'Create Data Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Create Data Students</h1>
            <form method="post" action="/students">
            @csrf
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Enter Your Name" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Enter Your NIS" name="nis" value="{{old('nis')}}">
                    @error('nis')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Your Email" name="email" value="{{old('email')}}">
                    @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Enter Your Jurusan"
                        name="jurusan" value="{{old('jurusan')}}">
                        @error('jurusan')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Create Data!</button>
            </form>
        </div>
    </div>
</div>
@endsection
