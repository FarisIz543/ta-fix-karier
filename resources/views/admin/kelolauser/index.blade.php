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
              <h3>Data User</h3>
              <p class="card-description">
                  <a href="{{ route('user.create') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
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
                              
                              <a href="{{ route('user.edit', $item->id) }}"
                                class="btn  btn-outline-primary" title="edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('user.destroy', ['user' => $item->id]) }}" method="POST">
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