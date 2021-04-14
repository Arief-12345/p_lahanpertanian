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
                    <input type="hidden" id="url_getdata" name="url_getdata" value="{{url('getdatapotensi/')}}">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Luas Lahan</label>
                        <input type="number" class="form-control" id="luas_lahan" name="luas_lahan" value="{{ old('luas_lahan') }}"
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
                        <select class="form-control" id="status_lahan" name="status_lahan">
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
                        <textarea name="lokasi_lahan" class="form-control" id="lokasi_lahan" cols="20" rows="5"></textarea>
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
            </div>
        </form>
        </div>
    </div>
</div>
<script>
    function getdata(id)
        {
            console.log(id)
            var url = $('#url_getdata').val() + '/' + id
            console.log(url);
    
            $.ajax({
                url: url,
                cache: false,
                success: function(response){
                    console.log(response);
                    
                    $('#id').val(response.id);
                    $('#luas_lahan').val(response.luas_lahan);
                    $('#status_lahan').val(response.status_lahan);
                    $('#lokasi_lahan').val(response.lokasi_lahan);
                }
            });    
        }
    </script>