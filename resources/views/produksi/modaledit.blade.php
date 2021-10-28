<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Produksi</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_produksi/update') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" id="url_getdata" name="url_getdata" value="{{ url('getdataproduksi/') }}">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Komoditi</label>
                        <select class="form-control" name="komoditi_id" id="komoditi_id">
                            <option value="">-- Pilih Komoditi --</option>
                            @foreach ($komoditi as $kom)
                                <option value="{{ $kom->id }}">{{ $kom->nama_komoditi }}</option>
                            @endforeach
                        </select>
                        @error('kecamatan_id')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Kecamatan</label>
                        <select class="form-control" name="kecamatan_id" id="kecamatan_id">
                            <option value="">-- Pilih Kecamatan --</option>
                            @foreach ($kecamatan as $kec)
                                <option value="{{ $kec->id }}">{{ $kec->nama_kecamatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tahun Produksi</label>
                        <input type="number" class="form-control" name="tahun" id="tahun" value="{{ old('tahun') }}"
                            placeholder="Masukkan Tahun ...">
                        @error('tahun')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Jumlah Produksi</label>
                        <input type="text" class="form-control" name="jmlh_produksi" id="jmlh_produksi"
                            value="{{ old('jmlh_produksi') }}" placeholder="Masukkan Jumlah Produksi ...">
                        <p style="color:red ; font-size: 12px">* Dalam Ton</p>
                        @error('jmlh_produksi')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Luas Panen</label>
                        <input type="text" class="form-control" name="luas_panen" id="luas_panen"
                            value="{{ old('luas_panen') }}" placeholder="Masukkan Jumlah Produksi ...">
                        <p style="color:red ; font-size: 12px">* Hektar</p>
                        @error('luas_panen')
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
<script>
    function getdata(id) {
        console.log(id)
        var url = $('#url_getdata').val() + '/' + id
        // var url = $('#url_getdataa').val() + '/' + id
        // var url = $('#url_getdata_hvps_v').val() + '/' + id
        console.log(url);

        $.ajax({
            url: url,
            cache: false,
            success: function(response) {
                console.log(response);

                $('#id').val(response.id);
                $('#komoditi_id').val(response.komoditi_id);
                $('#kecamatan_id').val(response.kecamatan_id);
                $('#tahun').val(response.tahun);
                $('#jmlh_produksi').val(response.jmlh_produksi);
                $('#luas_panen').val(response.luas_panen);
            }
        });
    }
</script>
