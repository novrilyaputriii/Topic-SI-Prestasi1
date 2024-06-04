<!-- Modal Edit Mahasiswa -->
<div class="modal fade" id="modalEditSiswa-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Edit Data Siswa
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('update_mahasiswa', ['id' => $item->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label class="form-label">Nama</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-badge"></i>
                                </span>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ $item->name }}"
                                    placeholder="Isi dengan nama lengkap" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">kelas</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="kelas"
                                    class="form-control @error('kelas') is-invalid @enderror">
                                    <option selected>{{ $item->kelas }}</option>
                                    <option value="7a"
                                        @if (old('kelas') == '7a') selected @endif>
                                        7a
                                    </option>
                                    <option value="7b"
                                        @if (old('kelas') == '7b') selected @endif>7b
                                    </option>
                                    <option value="7c"
                                        @if (old('kelas') == '7c') selected @endif>7c
                                    </option>
                                    <option value="7d"
                                        @if (old('kelas') == '7d') selected @endif>7d
                                    </option>
                                    <option value="7e"
                                        @if (old('kelas') == '7e') selected @endif>7e
                                    </option>
                                    <option value="8a"
                                        @if (old('kelas') == '8a') selected @endif>
                                        8a
                                    </option>
                                    <option value="8b"
                                        @if (old('kelas') == '8b') selected @endif>8b
                                    </option>
                                    <option value="8c"
                                        @if (old('kelas') == '8c') selected @endif>8c
                                    </option>
                                    <option value="8d"
                                        @if (old('kelas') == '8d') selected @endif>8d
                                    </option>
                                    <option value="8e"
                                        @if (old('kelas') == '8e') selected @endif>8e
                                    </option>
                                    <option value="9a"
                                        @if (old('kelas') == '9a') selected @endif>
                                        9a
                                    </option>
                                    <option value="9b"
                                        @if (old('kelas') == '9b') selected @endif>9b
                                    </option>
                                    <option value="9c"
                                        @if (old('kelas') == '9c') selected @endif>9c
                                    </option>
                                    <option value="9d"
                                        @if (old('kelas') == '9d') selected @endif>9d
                                    </option>
                                    <option value="9e"
                                        @if (old('kelas') == '9e') selected @endif>9e
                                    </option>

                                </select>
                                @error('kelas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="gender" class="form-control" required>
                                    <option selected>{{ $item->gender }}</option>
                                    <option value="Laki-Laki" @if (old('gender') == 'Laki-Laki') selected @endif>
                                        Laki-Laki</option>
                                    <option value="Perempuan" @if (old('gender') == 'Perempuan') selected @endif>
                                        Perempuan</option>
                                </select>
                                @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Email</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ $item->email }}" placeholder="Isi dengan email yang valid" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">kelas</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-lock"></i>
                                </span>
                                <input type="text" name="username"
                                    class="form-control @error('username') is-invalid @enderror"
                                    value="{{ $item->username }}" placeholder="Isi dengan benar" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer mt-3">
                            <button type="reset" class="btn btn-secondary"
                                data-bs-dismiss="modal"><i class="bi bi-chevron-left"></i> Kembali</button>
                            <button type="submit" class="btn btn-success"><i class="bi bi-check2"></i>  Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
