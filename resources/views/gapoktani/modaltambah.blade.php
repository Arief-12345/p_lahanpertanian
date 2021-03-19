<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Gapoktani</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_gapoktani/input') }}" method="POST">
                    {{ csrf_field() }}
                    {{-- <input type="hidden" id="role" name="role" value="Petugas"> --}}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Gapoktani</label>
                        <input type="text" class="form-control" name="nama_gapoktani" value="{{ old('nama_gapoktani') }}"
                            placeholder="Masukkan Nama Gapoktani ...">
                        @error('nama_gapoktani')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Ketua Gapoktani</label>
                        <input type="text" class="form-control" name="ketua_gapoktani" value="{{ old('ketua_gapoktani') }}"
                            placeholder="Masukkan Nama Ketua Gapoktani ...">
                        @error('ketua_gapoktani')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Jumlah Anggota</label>
                        <input type="number" class="form-control" name="jmlh_anggota" value="{{ old('jmlh_anggota') }}"
                            placeholder="Masukkan Jumlah Anggota ...">
                        @error('jmlh_anggota')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Lokasi Gapoktani</label>
                        <input type="text" class="form-control" name="lokasi_gapoktani" value="{{ old('lokasi_gapoktani') }}"
                            placeholder="Masukkan Lokasi Gapoktani ...">
                        @error('lokasi_gapoktani')
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
