@section('title')
Data Alumni
@endsection
@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="width: 1350px">
    <div class="row">
  <div class="col-10 grid-margin" style="margin-left: 100px">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Alumni</h4>
        <form class="form-sample" action="/user" method="post">
           @csrf
          <p class="card-description">
            Isi form tambah data alumni sesuai dengan format
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col">
                <label>NIM</label>
                <div class="col-sm-15">
                  <input type="text" class="form-control" name="nim" placeholder="cnth:10108025" />
                  <div class="text-danger">
                    @error('name')
                    {{ $message}}
                    @enderror
                </div>
                </div>
              </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col">
                <label>Nama</label>
                <div class="col-sm-15">
                  <input type="text" class="form-control" name="name" placeholder="Nama" />
                  <div class="text-danger">
                    @error('name')
                    {{ $message}}
                    @enderror
                </div>
                </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                  <div class="col">
                  <label>tempat</label>
                  <div class="col-sm-15">
                    <input type="text" class="form-control" name="temoat" placeholder="tempat" />
                    <div class="text-danger">
                      @error('tempat')
                      {{ $message}}
                      @enderror
                  </div>
                  </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <div class="col">
              <label>tanggal lahir</label>
              <div class="col-sm-15">
                <input type="date" class="form-control" name="tanggal_lahir" placeholder=" " />
                <div class="text-danger">
                  @error('tanggal_lahir')
                  {{ $message}}
                  @enderror
              </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <div class="col">
              <label>Jurusan</label>
              <div class="col-sm-15">
                <input type="text" class="form-control" name="jurusan" placeholder="jurusan" />
                <div class="text-danger">
                  @error('jurusan')
                  {{ $message}}
                  @enderror
              </div>
              </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col">
                <label>Password</label>
                <div class="col-sm-15">
                  <input type="password" class="form-control" name="password" placeholder="cnth: 090911"/>
                  <div class="text-danger">
                    @error('password')
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
              <a href="/user"><button type="button" class="btn btn-secondary btn-rounded btn-fw" style="padding: 10px 25px 10px 25px">Batal</button></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    </div>
  </div>
@endsection