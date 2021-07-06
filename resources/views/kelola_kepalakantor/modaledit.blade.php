<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kepala Kantor</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_kepalakantor/update') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" id="id_user" name="id_user" value="">
                    <input type="hidden" class="form-control" id="url_getdata" name="url_getdata" value="{{url('getdatakepalakantor/')}}" readonly>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">NIP</label>
                        <input type="text" class="form-control" id="nnip" name="nip" value="{{ old('nip') }}"
                            placeholder="Masukkan NIP ...">
                        @error('nip')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" class="form-control" id="uusername" name="username" value="{{ old('username') }}"
                            placeholder="Masukkan Username ...">
                        @error('username')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" id="nname" name="name" value="{{ old('name') }}"
                            placeholder="Masukkan Nama ...">
                        @error('name')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">E-mail</label>
                        <input type="email" class="form-control" id="eemail" name="email" value="{{ old('email') }}"
                            placeholder="Masukkan E-mail ...">
                        @error('email')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="ppassword" name="password" value="{{ old('password') }}"
                            placeholder="Masukkan Password ...">
                        @error('password')
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
    
                    $('#id_user').val(response.user.id);
                    $('#nnip').val(response.nip);
                    $('#nname').val(response.name);
                    $('#uusername').val(response.username);
                    $('#eemail').val(response.user.email);
                    $('#ppassword').val(response.password);                    
                }
            });    
        }
    </script>