@section('title')
Data Prodi
@endsection
@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="width: 1350px">
    <div class="row">
  <div class="col-10 grid-margin" style="margin-left: 100px">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Prodi</h4>
        <form class="form-sample" action="/user" method="post">
           @csrf
          <p class="card-description">
            Isi form tambah data Prodi sesuai dengan format
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col">
                <label>Nama Prodi</label>
                <div class="col-sm-15">
                  <input type="text" class="form-control" name="nama_prodi" placeholder="Contoh D4-Sistem Informasi" />
                  <div class="text-danger">
                    @error('nama_prodi')
                    {{ $message}}
                    @enderror
                </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col">
                <label>Jurusan</label>
                <div class="col-sm-15">
                  <input type="text" class="form-control" name="jurusan" />
                  <div class="text-danger">
                    @error('jurusan')
                    {{ $message}}
                    @enderror
                </div>
                </div>
                </div>
              </div>
            </div>
        </div>
            <div style="margin-left: 80%; margin-top: 10px">
              <button type="submit" class="btn btn-primary btn-rounded btn-fw" style="padding: 10px 20px 10px 20px">Simpan</button>
              <a href="/prodi"><button type="button" class="btn btn-secondary btn-rounded btn-fw" style="padding: 10px 25px 10px 25px">Batal</button></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    </div>
  </div>
@endsection