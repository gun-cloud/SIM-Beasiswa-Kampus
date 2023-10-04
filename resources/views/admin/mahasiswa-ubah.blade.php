<div class="modal fade" id="ubah{{$mahasiswa->id}}" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahLabel">Ubah Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="{{$mahasiswa->nim}} {{old('nim')}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$mahasiswa->nama}} {{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label for="prodi">Program Studi</label>
                        <select class="form-control" id="prodi" name="id_prodi">
                            @foreach($prodis as $prodi)
                            <option hidden value="">--Pilih Program Studi--</option>
                            <option value="{{$prodi->id}}" {{$mahasiswa->id_prodi==$prodi->id ?'selected':''}} {{ old('id_prodi') == $prodi->id ? 'selected' : '' }}>{{$prodi->prodi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" class="form-control" id="semester" name="semester" value="{{$mahasiswa->semester}} {{old('semester')}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
