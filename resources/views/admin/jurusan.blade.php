@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="card">
        @if($message=Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
        @endif
        <div class="card-body d-flex justify-content-between align-items-center">
            <h4 class="card-title">Data Jurusan</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                Tambah
            </button>
            @include('admin.jurusan-tambah')
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jurusans as $index => $jurusan)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$jurusan->jurusan}}</td>
                        <td>
                            <button type="button" class="badge badge-warning" data-toggle="modal" data-target="#ubah">
                                Ubah
                            </button>
                            <button type="button" class="badge badge-danger" data-toggle="modal" data-target="#hapus">
                                Hapus
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center"><i>Data Kosong</i></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
