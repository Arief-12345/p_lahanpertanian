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
                        <label for="recipient-name" class="col-form-label">Tahun Produksi</label>
                        <input type="number" class="form-control" name="tahun" value="{{ old('tahun') }}"
                            placeholder="Masukkan Tahun ...">
                        @error('tahun')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Jumlah Produksi</label>
                        <input type="number" class="form-control" name="jmlh_produksi"
                            value="{{ old('jmlh_produksi') }}" placeholder="Masukkan Jumlah Produksi ...">
                        <p style="color:red ; font-size: 12px">* Dalam Kg</p>
                        @error('jmlh_produksi')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nilai Hasil Produksi</label>
                        <input type="float" class="form-control" name="nilai_hasil_produksi"
                            value="{{ old('nilai_hasil_produksi') }}"
                            placeholder="Masukkan Nilai Hasil Produksi ...">
                        <p style="color:red ; font-size: 12px">* Dalam Ton</p>
                        @error('nilai_hasil_produksi')
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
