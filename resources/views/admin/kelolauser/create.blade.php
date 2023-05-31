@section('title')
Data User
@endsection
@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="width: 1350px">
    <div class="row">
  <div class="col-10 grid-margin" style="margin-left: 100px">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data User</h4>
        <form class="form-sample" action="/user" method="post">
           @csrf
          <p class="card-description">
            Isi form tambah data user sesuai dengan format
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <div class="col">
                <label>Nama</label>
                <div class="col-sm-15">
                  <input type="text" class="form-control" name="name" placeholder="cnth: Ahmad / Taekwang Tbk." />
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
                <label>Email</label>
                <div class="col-sm-15">
                  <input type="text" class="form-control" name="email" placeholder="Email" />
                  <div class="text-danger">
                    @error('email')
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