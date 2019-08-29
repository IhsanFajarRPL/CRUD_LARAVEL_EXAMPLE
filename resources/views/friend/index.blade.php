@extends('layout/main')

@section('title', 'List Friend')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">LIST FRIEND</h1>

                <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($friend as $frd)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $frd->nama }}</td>
                            <td>{{ $frd->nis }}</td>
                            <td>{{ $frd->email }}</td>
                            <td>{{ $frd->jurusan }}</td>
                            <td>
                                <a href="" class="badge btn-success">Edit</a>
                                <a href="" class="badge btn-danger">Delete</a>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
