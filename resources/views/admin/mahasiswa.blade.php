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
                    <tr>
                        <td>1</td>
                        <td>Hendri Gunawan</td>
                        <td>2105112011</td>
                        <td>Teknik Komputer dan Informatika</td>
                        <td>D3 Teknik Komputer</td>
                        <td>5</td>
                        <td><label class="badge badge-success">Beasiswa</label></td>
                        <td>
                            <button type="button" class="badge badge-warning" data-toggle="modal" data-target="#ubah">
                                Ubah
                            </button>
                            <button type="button" class="badge badge-danger" data-toggle="modal" data-target="#hapus">
                                Hapus
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ike Fadillah</td>
                        <td>2105112009</td>
                        <td>Teknik Komputer dan Informatika</td>
                        <td>D3 Teknik Komputer</td>
                        <td>5</td>
                        <td><label class="badge badge-danger">Tidak Beasiswa</label></td>
                        <td>
                            <button type="button" class="badge badge-warning" data-toggle="modal" data-target="#ubah">
                                Ubah
                            </button>
                            <button type="button" class="badge badge-danger" data-toggle="modal" data-target="#hapus">
                                Hapus
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
