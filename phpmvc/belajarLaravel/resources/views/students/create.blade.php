@extends('layout.main')

@section('title','Form Tambah Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mt-3">Form Tambah Data Mahasiswa</h2>
            <form action="/students" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                  value="{{old('nama')}}" placeholder="Masukan Nama" name="nama">
                  @error('nama') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="mb-3">
                  <label for="nrp" class="form-label">NRP</label>
                  <input type="text" class="form-control @error('nrp') is-invalid @enderror " id="nrp"
                  value="{{old('nrp')}}"  placeholder="Masukan NRP" name="nrp">
                  @error('nrp') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                  value="{{old('email')}}"  placeholder="Masukan Email" name="email">
                  @error('email') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>

                <div class="mb-3">
                  <label for="jurusan" class="form-label">Jurusan</label>
                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                  value="{{old('jurusan')}}"  placeholder="Masukan Jurusan" name="jurusan">
                  @error('jurusan') <div class="invalid-feedback">{{ $message }} </div> @enderror
                </div>
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>

              </form>
        </div>
    </div>
</div>

@endsection
