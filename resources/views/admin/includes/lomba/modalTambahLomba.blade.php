<!-- Modal Tambah Lomba -->
<div class="modal fade" id="modalTambahLomba" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Lomba</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form class="row g-3" action="/lomba" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6 mb-1">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-1">
                            <label class="form-label">nisn</label>
                            <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror"
                                value="{{ old('nisn') }}">
                            @error('nisn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group col-12 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Jurusan</label>
                            </div>
                            <select name="Kelas" class="form-control @error('Kelas') is-invalid @enderror">
                                <option value="7a" @if (old('Kelas') == '7a') selected @endif>
                                    7a
                                </option>
                                <option value="7b" @if (old('Kelas') == '7b') selected @endif>7b
                                </option>
                                <option value="7c" @if (old('Kelas') == '7c') selected @endif>7c
                                </option>
                                <option value="7d" @if (old('Kelas') == '7d') selected @endif>7d
                                </option>
                                <option value="7e" @if (old('Kelas') == '7e') selected @endif>7e
                                </option>
                                <option value="8a" @if (old('Kelas') == '8a') selected @endif>
                                    8a
                                </option>
                                <option value="8b" @if (old('Kelas') == '8b') selected @endif>8b
                                </option>
                                <option value="8c" @if (old('Kelas') == '8c') selected @endif>8c
                                </option>
                                <option value="8d" @if (old('Kelas') == '8d') selected @endif>8d
                                </option>
                                <option value="8e" @if (old('Kelas') == '8e') selected @endif>8e
                                </option>
                                <option value="9a" @if (old('Kelas') == '9a') selected @endif>
                                    9a
                                </option>
                                <option value="9b" @if (old('Kelas') == '9b') selected @endif>9b
                                </option>
                                <option value="9c" @if (old('Kelas') == '9c') selected @endif>9c
                                </option>
                                <option value="9d" @if (old('Kelas') == '9d') selected @endif>9d
                                </option>
                                <option value="9e" @if (old('Kelas') == '9e') selected @endif>9e
                                </option>

                            </select>
                            @error('jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama Lomba</label>
                            <input type="text" name="lomba"
                                class="form-control  @error('lomba') is-invalid @enderror" value="{{ old('lomba') }}">
                            @error('lomba')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Penyelenggara</label>
                            <input type="text" name="penyelenggara"
                                class="form-control @error('penyelenggara') is-invalid @enderror"
                                value="{{ old('penyelenggara') }}">
                            @error('penyelenggara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group col-12 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Tingkatan</label>
                            </div>
                            <select class="form-control @error('tingkat') is-invalid @enderror" name="tingkat">
                                <option value="">Pilih Tingkatan</option>
                                <option value="Desa/Lurah" @if (old('tingkat') == 'Desa/Lurah') selected @endif>
                                    Desa/Lurah</option>
                                <option value="Kecamatan" @if (old('tingkat') == 'Kecamatan') selected @endif>
                                    Kecamatan</option>
                                <option value="Kota/Kabupaten" @if (old('tingkat') == 'Kota/Kabupaten') selected @endif>
                                    Kota/Kabupaten</option>
                                <option value="Provinsi" @if (old('tingkat') == 'Provinsi') selected @endif>Provinsi
                                </option>
                                <option value="Nasional" @if (old('tingkat') == 'Nasional') selected @endif>
                                    Nasional</option>
                                <option value="Internasional" @if (old('tingkat') == 'Internasional') selected @endif>
                                    Internasional</option>
                            </select>
                            @error('tingkat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label for="date" class="form-label">Tanggal</label>
                            <input class="form-control @error('date') is-invalid @enderror" type="date"
                                name="date" value="{{ old('date') }}" id="date">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-8">
                            <label for="formFile" class="form-label">Upload Sertifikat</label>

                            <input class="form-control @error('sertifikat') is-invalid @enderror" name="sertifikat"
                                type="file">
                            @error('sertifikat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer mt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                            class="bi bi-chevron-left"></i> Kembali</button>
                    <button type="submit" class="btn btn-success"><i class="bi bi-check2"></i> Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
