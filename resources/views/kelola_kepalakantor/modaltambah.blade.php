<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kepala Kantor</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_kepalakantor/input') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NIP</label>
                        <input type="text" class="form-control" name="nip" value="{{ old('nip') }}"
                            placeholder="Masukkan NIP ...">
                        @error('nip')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                            placeholder="Masukkan Username ...">
                        @error('username')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                            placeholder="Masukkan Nama ...">
                        @error('name')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                            placeholder="Masukkan E-mail ...">
                        @error('email')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}"
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
