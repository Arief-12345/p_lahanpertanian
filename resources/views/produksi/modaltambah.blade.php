<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produksi</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_produksi/input') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Jenis Produksi</label>
                        <input type="text" class="form-control" name="jenis_produksi" value="{{ old('jenis_produksi') }}"
                            placeholder="Masukkan Jenis Produksi ...">
                        @error('jenis_produksi')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Lokasi Produksi</label>
                        <input type="text" class="form-control" name="lokasi_produksi" value="{{ old('lokasi_produksi') }}"
                            placeholder="Masukkan Lokasi Produksi ...">
                        @error('lokasi_produksi')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Jumlah Produksi</label>
                        <input type="number" class="form-control" name="jmlh_produksi" value="{{ old('jmlh_produksi') }}"
                            placeholder="Masukkan Jumlah Produksi ...">
                        <p style="color:red ; font-size: 12px">* Dalam Kilogram</p>
                        @error('jmlh_produksi')
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
