<div class="modal fade top" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('mahasiswa.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="{{old('nim')}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label for="prodi">Program Studi</label>
                        <select class="form-control" id="prodi" name="id_prodi">
                            @foreach($prodis as $prodi)
                            <option hidden selected value="">--Pilih Program Studi--</option>
                            <option value="{{$prodi->id}}" {{ old('id_prodi') == $prodi->id ? 'selected' : '' }}>{{$prodi->prodi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" class="form-control" id="semester" name="semester">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
