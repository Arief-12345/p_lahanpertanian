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
                        <label for="recipient-name" class="col-form-label">Luas Lahan</label>
                        <input type="number" class="form-control" name="luas_lahan" value="{{ old('luas_lahan') }}"
                            placeholder="Masukkan Luas Lahan ...">
                            <p style="color:red ; font-size: 12px">* Dalam Satuan Hektar (Ha)</p>
                        @error('luas_lahan')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Status Lahan</label>
                        <select class="form-control" name="status_lahan">
                            <option value="">-- Pilih Status Lahan --</option>
                            <option value="Ada Pemilik">Ada Pemilik</option>
                            <option value="Tanpa Pemilik">Tanpa Pemilik</option>
                        </select>
                        @error('status_lahan')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Lokasi Lahan</label>
                        <textarea name="lokasi_lahan" class="form-control" id="" cols="20" rows="5"></textarea>
                        @error('lokasi_lahan')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
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
