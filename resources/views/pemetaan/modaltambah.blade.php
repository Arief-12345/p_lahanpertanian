<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kecamatan</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/pemetaan/input') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nama Kecamatan</label>
                        <input type="text" class="form-control" name="nama_kecamatan"
                            value="{{ old('nama_kecamatan') }}" placeholder="Masukkan Nama Kecamatan ...">
                        @error('nama_kecamatan')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Warna</label>
                        <input type="color" class="form-control" name="warna" 
                            value="{{ old('warna') }}">
                        @error('warna')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Geojson</label>
                        <textarea class="form-control" name="geojson" cols="30" rows="10"></textarea>
                        @error('geojson')
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