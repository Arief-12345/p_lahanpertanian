<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Potensi Lahan Pertanian</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_data_potensi_lahan_pertanian/update') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" id="url_getdata" name="url_getdata" value="{{ url('getdatapotensi/') }}">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Kecamatan</label>
                        <select class="form-control" name="kecamatan_id" id="kecamatan_id">
                            <option value="">-- Pilih Kecamatan --</option>
                            @foreach ($kecamatan as $kec)
                                <option value="{{ $kec->id }}">{{ $kec->nama_kecamatan }}</option>
                            @endforeach
                        </select>
                        @error('kecamatan_id')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Luas Lahan Kosong</label>
                        <input type="number" class="form-control" name="luas_lahan_kosong" id="luas_lahan_kosong"
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
                        <input type="number" class="form-control" name="tahun" id="tahun" value="{{ old('tahun') }}"
                            placeholder="Masukkan Tahun ...">
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
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    function getdata(id) {
        console.log(id)
        var url = $('#url_getdata').val() + '/' + id
        console.log(url);

        $.ajax({
            url: url,
            cache: false,
            success: function(response) {
                console.log(response);

                $('#id').val(response.id);
                $('#kecamatan_id').val(response.kecamatan_id);
                $('#tahun').val(response.tahun);
                $('#luas_lahan_kosong').val(response.luas_lahan_kosong);
            }
        });
    }
</script>
