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
                    <input type="hidden" id="url_getdata" name="url_getdata" value="{{url('getdataproduksi/')}}">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Jenis Produksi</label>
                        <input type="text" class="form-control" id="jenis_produksi" name="jenis_produksi" value="{{ old('jenis_produksi') }}"
                            placeholder="Masukkan Jenis Produksi ...">
                        @error('jenis_produksi')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Lokasi Produksi</label>
                        <input type="text" class="form-control" id="lokasi_produksi" name="lokasi_produksi" value="{{ old('lokasi_produksi') }}"
                            placeholder="Masukkan Lokasi Produksi ...">
                        @error('lokasi_produksi')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Jumlah Produksi</label>
                        <input type="number" class="form-control" id="jmlh_produksi" name="jmlh_produksi" value="{{ old('jmlh_produksi') }}"
                            placeholder="Masukkan Jumlah Produksi ...">
                        <p style="color:red ; font-size: 12px">* Dalam Kilogram</p>
                        @error('jmlh_produksi')
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
                    $('#jenis_produksi').val(response.jenis_produksi);
                    $('#jmlh_produksi').val(response.jmlh_produksi);
                    $('#lokasi_produksi').val(response.lokasi_produksi);
                }
            });    
        }
    </script>