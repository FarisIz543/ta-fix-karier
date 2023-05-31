@section('title')
Data User
@endsection
@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
  <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h3>Data Alumni</h3>
              <p class="card-description">
                  <a href="{{ route('alumni.create') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
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
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Tempat</th>                                                                              
                          <th>Tanggal lahir</th>
                          <th>Jurusan</th>
                          <th>Prodi</th>
                          <th>Angkatan</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($alumni as $item)
                              
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->tempat }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>{{ $item ->prodi }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>
                              
                              <a href="{{ route('alumni.edit', $item->id) }}"
                                class="btn  btn-outline-primary" title="edit">
                                <i class="fas fa-pencil-alt"></i>Ubah
                            </a>
                            <form action="{{ route('alumni.destroy', ['alumni' => $item->id]) }}" method="POST">
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