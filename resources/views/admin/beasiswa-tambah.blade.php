<div class="modal fade top" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Tambah Data Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('beasiswa.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Beasiswa</label>
                        <input type="text" class="form-control" id="jurusan" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Beasiswa</label>
                        <input type="text" class="form-control" id="jurusan" name="jenis">
                    </div>
                    <div class="form-group">
                        <label for="sumber">Sumber Dana Beasiswa</label>
                        <input type="text" class="form-control" id="jurusan" name="sumber">
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
