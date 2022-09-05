@extends('layout.main')

@section('title','Daftar Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="mt-3">Daftar Mahasiswa</h2>

            <table class="table text-center ">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mahasiswa as $mhs)

                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->nrp}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>
                            <a href="" class="badge bg-success " style="text-decoration: none">update</a>
                            <a href="" class="badge bg-danger"  style="text-decoration: none">delete</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection
