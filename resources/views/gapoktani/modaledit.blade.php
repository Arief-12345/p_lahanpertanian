<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Gapoktani</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_gapoktani/update') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" id="url_getdata" name="url_getdata" value="{{ url('getdatagapoktani/') }}">
                    <input type="hidden" id="id" name="id" value="">
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
                        <label for="recipient-name" class="col-form-label">Nama Gapoktani</label>
                        <input type="text" class="form-control" name="nama_gapoktani" id="nama_gapoktani"
                            value="{{ old('nama_gapoktani') }}" placeholder="Masukkan Nama Gapoktani ...">
                        @error('nama_gapoktani')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Ketua Gapoktani</label>
                        <input type="text" class="form-control" name="ketua_gapoktani" id="ketua_gapoktani"
                            value="{{ old('ketua_gapoktani') }}" placeholder="Masukkan Nama Ketua Gapoktani ...">
                        @error('ketua_gapoktani')
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
                $('#nama_gapoktani').val(response.nama_gapoktani);
                $('#ketua_gapoktani').val(response.ketua_gapoktani);
                $('#kecamatan_id').val(response.kecamatan_id);
            }
        });
    }
</script>
