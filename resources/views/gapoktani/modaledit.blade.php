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
                    <input type="hidden" id="url_getdata" name="url_getdata" value="{{url('getdatagapoktani/')}}">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Gapoktani</label>
                        <input type="text" class="form-control" id="nama_gapoktani" name="nama_gapoktani" value="{{ old('nama_gapoktani') }}"
                            placeholder="Masukkan Nama Gapoktani ...">
                        @error('nama_gapoktani')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Ketua Gapoktani</label>
                        <input type="text" class="form-control" id="ketua_gapoktani" name="ketua_gapoktani" value="{{ old('ketua_gapoktani') }}"
                            placeholder="Masukkan Nama Ketua Gapoktani ...">
                        @error('ketua_gapoktani')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Jumlah Anggota</label>
                        <input type="number" class="form-control" id="jmlh_anggota" name="jmlh_anggota" value="{{ old('jmlh_anggota') }}"
                            placeholder="Masukkan Jumlah Anggota ...">
                        @error('jmlh_anggota')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Lokasi Gapoktani</label>
                        <input type="text" class="form-control" id="lokasi_gapoktani" name="lokasi_gapoktani" value="{{ old('lokasi_gapoktani') }}"
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
<script>
    function getdata(id)
        {
            console.log(id)
            var url = $('#url_getdata').val() + '/' + id
            // var url = $('#url_getdataa').val() + '/' + id
            // var url = $('#url_getdata_hvps_v').val() + '/' + id
            console.log(url);
    
            $.ajax({
                url: url,
                cache: false,
                success: function(response){
                    console.log(response);
                    
                    $('#id').val(response.id);
                    $('#nama_gapoktani').val(response.nama_gapoktani);
                    $('#ketua_gapoktani').val(response.ketua_gapoktani);
                    $('#jmlh_anggota').val(response.jmlh_anggota);
                    $('#lokasi_gapoktani').val(response.lokasi_gapoktani);
                }
            });    
        }
    </script>