@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="card">
        @if($message=Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card-body d-flex justify-content-between align-items-center">
            <h4 class="card-title">Data Program Studi</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                Tambah
            </button>
            @include('admin.prodi-tambah')
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Program Studi</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($prodis as $index => $prodi)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$prodi->prodi}}</td>
                        <td>{{$prodi->jurusan->jurusan}}</td>
                        <td>
                            @include('admin.prodi-ubah')
                            <form action="{{route('prodi.destroy',$prodi->id)}}" method="post">
                                <button type="button" class="badge badge-warning" data-toggle="modal" data-target="#ubah{{$prodi->id}}">
                                    Ubah
                                </button>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="badge badge-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center"><i>Data Kosong</i></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
             {!! $prodis->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>
@endsection
