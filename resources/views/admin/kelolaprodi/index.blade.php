@section('title')
Data Prodi
@endsection
@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
  <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3>Data Prodi</h3>
              <p class="card-description">
                  <a href="{{ route('prodi.create') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
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
                          <th>Nama Prodi</th>                                                                            
                          <th>Jumlah Alumni</th>                                                                            
                          <th>Jurusan</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($prodi as $item)
                              
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item ->nama_prodi }}</td>
                            <td>{{ $item->jumlah_alumni }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>
                              
                              <a href="{{ route('prodi.edit', $item->id) }}"
                                class="btn  btn-outline-primary" title="edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('prodi.destroy', ['user' => $item->id]) }}" method="POST">
                              @csrf
                          
                              @method('DELETE')
                          
                              <button class="btn  btn-outline-danger delete" type="submit">Hapus</button>
                          </form>
                            {{-- <button value="{{ route('user.destroy', $item->id) }}"
                                class="btn  btn-outline-danger delete" type="submit"> <i
                                    class="fas fa-trash"></i> hhhjhjj
                            </button> --}}
                          </td>
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