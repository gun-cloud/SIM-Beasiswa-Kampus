<div class="modal fade top" id="ubah{{$beasiswa->id}}" tabindex="-1" role="dialog" aria-labelledby="UbahLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UbahLabel">Ubah Data Beasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('beasiswa.update',$beasiswa->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama">Nama Beasiswa</label>
                        <input type="text" class="form-control" id="jurusan" name="nama" value={{$beasiswa->nama}}>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Beasiswa</label>
                        <input type="text" class="form-control" id="jurusan" name="jenis" value={{$beasiswa->jenis}}>
                    </div>
                    <div class="form-group">
                        <label for="sumber">Sumber Dana Beasiswa</label>
                        <input type="text" class="form-control" id="jurusan" name="sumber" value={{$beasiswa->sumber}}>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
