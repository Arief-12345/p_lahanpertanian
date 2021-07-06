<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Komoditi Hasil Panen</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_data_komoditi_hasil_panen/update') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" id="url_getdata" name="url_getdata" value="{{ url('getdatakomoditi/') }}">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nama Komoditi</label>
                        <input type="text" class="form-control" name="nama_komoditi" id="nama_komoditi"
                            value="{{ old('nama_komoditi') }}" placeholder="Masukkan Nama Komoditi ...">
                        @error('status_lahan')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Jumlah Komoditi</label>
                        <input type="number" class="form-control" name="jmlh_komoditi" id="jmlh_komoditi"
                            value="{{ old('jmlh_komoditi') }}" placeholder="Masukkan Jumlah Komoditi ...">
                        <p style="color:red ; font-size: 12px">* Dalam Satuan Ton</p>
                        @error('jmlh_komoditi')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Lokasi Komoditi</label>
                        <textarea name="lokasi_komoditi" class="form-control" id="lokasi_komoditi" cols="20"
                            rows="5"></textarea>
                        @error('lokasi_komoditi')
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
        console.log(url);

        $.ajax({
            url: url,
            cache: false,
            success: function(response) {
                console.log(response);

                $('#id').val(response.id);
                $('#nama_komoditi').val(response.nama_komoditi);
                $('#jmlh_komoditi').val(response.jmlh_komoditi);
                $('#lokasi_komoditi').val(response.lokasi_komoditi);
            }
        });
    }

</script>