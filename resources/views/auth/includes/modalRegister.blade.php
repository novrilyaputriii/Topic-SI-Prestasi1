<!-- Modal Register -->
<div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-person-plus"></i> Register Akun</h1>
            </div>
            <div class="modal-body">
                <form action="{{ route('proses_register') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3">
                        <label class="form-label">Nama</label>
                        <div class="wrap-input100 validate-input input-group">
                            <span class="input-group-text bg-white text-muted">
                                <i class="bi bi-person-badge"></i>
                            </span>
                            <input type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                placeholder="Isi dengan nama lengkap">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Jurusan</label>
                        <div class="wrap-input100 validate-input input-group">
                            <span class="input-group-text bg-white text-muted">
                                <i class="bi bi-chevron-double-right"></i>
                            </span>
                            <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                                <option value="7a" @if (old('jurusan') == '7a') selected @endif>7a
                                </option>
                                <option value="7b" @if (old('jurusan') == '7b') selected @endif>7b
                                </option>
                                <option value="7c" @if (old('jurusan') == '7c') selected @endif>7c
                                </option>
                                <option value="8a" @if (old('jurusan') == '8a') selected @endif>8a
                                </option>
                                <option value="8b" @if (old('jurusan') == '8b') selected @endif>8b
                                </option>
                                <option value="8c" @if (old('jurusan') == '8c') selected @endif>8c
                                </option>
                                <option value="9a" @if (old('jurusan') == '9a') selected @endif>9a
                                </option>
                                <option value="9b" @if (old('jurusan') == '9b') selected @endif>9b
                                </option>
                                <option value="9c" @if (old('jurusan') == '9c') selected @endif>9c
                                </option>
                            </select>
                            @error('jurusan')
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
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                placeholder="Isi dengan email yang valid">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">NPM</label>
                        <div class="wrap-input100 validate-input input-group">
                            <span class="input-group-text bg-white text-muted">
                                <i class="bi bi-person-lock"></i>
                            </span>
                            <input type="text" name="username"
                                class="form-control @error('username') is-invalid @enderror"
                                value="{{ old('username') }}" placeholder="Isi dengan NPM/NIM yang valid">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <div class="wrap-input100 validate-input input-group">
                            <span class="input-group-text bg-white text-muted">
                                <i class="bi bi-key"></i>
                            </span>
                            <input class="input100 form-control @error('password') is-invalid @enderror"
                                value="{{ old('password') }}" name="password" type="password"
                                placeholder="Tambahkan password">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                </form>
            </div>

        </div>
    </div>
</div>
