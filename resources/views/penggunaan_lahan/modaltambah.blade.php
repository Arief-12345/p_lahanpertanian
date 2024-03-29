<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Penggunaan Lahan</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/penggunaan_lahan/input') }}" method="POST">
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
                        @error('kecamatan_id')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Komoditi</label>
                        <select class="form-control" name="komoditi_id" id="">
                            <option value="">-- Pilih Komoditi --</option>
                            @foreach ($komoditi as $kom)
                                <option value="{{ $kom->id }}" {{ old('komoditi_id') ? 'selected' : '' }}>
                                    {{ $kom->nama_komoditi }}</option>
                            @endforeach
                        </select>
                        @error('komoditi_id')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Tahun</label>
                            <input type="integer" class="form-control" name="tahun" value="{{ old('tahun') }}"
                                placeholder="Masukkan Tahun ...">
                            @error('tahun')
                                <div class="text-danger ml-3 mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Luas Penggunaan Lahan</label>
                        <input type="float" class="form-control" name="luas_penggunaan_lahan"
                            value="{{ old('luas_penggunaan_lahan') }}"
                            placeholder="Masukkan Luas Penggunaan Lahan ...">
                        <p style="color:red ; font-size: 12px">* Dalam Hektar</p>
                        @error('luas_penggunaan_lahan')
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
