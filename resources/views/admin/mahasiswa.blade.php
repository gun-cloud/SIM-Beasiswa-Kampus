@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h4 class="card-title">Data Mahasiswa</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                Tambah
            </button>
            @include('admin.mahasiswa-tambah')
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Program Studi</th>
                        <th>Semester</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mahasiswas as $index => $mahasiswa)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$mahasiswa->nama}}</td>
                        <td>{{$mahasiswa->nim}}</td>
                        <td>{{$mahasiswa->prodi->jurusan->jurusan}}</td>
                        <td>{{$mahasiswa->prodi->prodi}}</td>
                        <td>{{$mahasiswa->semester}}</td>
                        <td>
                            @if($mahasiswa->status == 1)
                            <label class="badge badge-success">Beasiswa</label>
                            @else
                            <label class="badge badge-danger">Tidak Beasiswa</label>
                            @endif
                        </td>
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
                        <td class="text-center"><i>Data Kosong</i></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
