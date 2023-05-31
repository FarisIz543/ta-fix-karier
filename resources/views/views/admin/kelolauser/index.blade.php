@section('title')
Data User
@endsection
@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3>Data User</h3>
              <p class="card-description">
                  <a href="/siswa/tambahsiswa"><button type="button" class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
              </p>
              
              @if(session()->has('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
              @endif

              <div class="table-responsive">
                  <table class="table table-hover" id="example1">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>                                                                              
                          <th>Email</th>
                          <th>Role</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($user as $item)
                              
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item ->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->role }}</td>
                            <td>
                              
                              <a href="{{ route('index.edit', $item->id) }}"
                                class="btn  btn-outline-primary" title="edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <button value="{{ route('index.destroy', $item->id) }}"
                                class="btn  btn-outline-danger delete"> <i
                                    class="fas fa-trash"></i>
                            </button></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
               
              </div>
            </div>
          </div>
        </div>
  </div>
    @endsection