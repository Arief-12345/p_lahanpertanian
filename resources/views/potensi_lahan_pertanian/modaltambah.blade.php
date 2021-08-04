<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Potensi Lahan Pertanian</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_data_potensi_lahan_pertanian/input') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Kecamatan</label>
                        <select class="form-control" name="kecamatan_id" id="">
                            <option value="">-- Pilih Kecamatan --</option>
                            @foreach ($kecamatan as $kec)
                                <option value="{{ $kec->id }}" {{ old('kecamatan_id') ? 'selected' : '' }}>
                                    {{ $kec->nama_kecamatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Luas Lahan Kosong</label>
                        <input type="number" class="form-control" name="luas_lahan_kosong"
                            value="{{ old('luas_lahan_kosong') }}" placeholder="Masukkan Luas Lahan Kosong ...">
                        <p style="color:red ; font-size: 12px">* Dalam Satuan Hektar (Ha)</p>
                        @error('luas_lahan_kosong')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tahun</label>
                        <input type="number" class="form-control" name="tahun" value="{{ old('tahun') }}"
                            placeholder="Masukkan Luas Lahan ...">
                        @error('tahun')
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
