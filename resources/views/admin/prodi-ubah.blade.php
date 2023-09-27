<div class="modal fade top" id="ubah{{$prodi->id}}" tabindex="-1" role="dialog" aria-labelledby="ubah{{$prodi->id}}Label" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubah{{$prodi->id}}Label">Ubah Data Program Studi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
            <div class="modal-body">
                <form action="{{route('prodi.update',$prodi->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="prodi">Program Studi</label>
                        <input type="text" class="form-control" id="prodi" name="prodi" value="{{$prodi->prodi}}">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="id_jurusan">
                            @foreach($jurusans as $jurusan)
                            <option hidden>--Pilih Jurusan--</option>
                            <option value="{{$jurusan->id}}" {{$prodi->id_jurusan==$jurusan->id ? 'selected' : ''}}>{{$jurusan->jurusan}}</option>
                            @endforeach
                        </select>
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
