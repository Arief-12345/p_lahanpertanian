<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Komoditi Hasil Panen</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_data_komoditi_hasil_panen/input') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nama Komoditi</label>
                        <input type="text" class="form-control" name="nama_komoditi"
                            value="{{ old('nama_komoditi') }}" placeholder="Masukkan Nama Komoditi ...">
                        @error('nama_komoditi')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
