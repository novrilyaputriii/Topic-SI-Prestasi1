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
                        <?php echo csrf_field(); ?>
                        <div class="col-md-6 mb-1">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name"
                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-1">
                            <label class="form-label">nisn</label>
                            <input type="text" name="nisn" class="form-control <?php $__errorArgs = ['nisn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('nisn')); ?>">
                            <?php $__errorArgs = ['nisn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="input-group col-12 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Jurusan</label>
                            </div>
                            <select name="Kelas" class="form-control <?php $__errorArgs = ['Kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value="7a" <?php if(old('Kelas') == '7a'): ?> selected <?php endif; ?>>
                                    7a
                                </option>
                                <option value="7b" <?php if(old('Kelas') == '7b'): ?> selected <?php endif; ?>>7b
                                </option>
                                <option value="7c" <?php if(old('Kelas') == '7c'): ?> selected <?php endif; ?>>7c
                                </option>
                                <option value="7d" <?php if(old('Kelas') == '7d'): ?> selected <?php endif; ?>>7d
                                </option>
                                <option value="7e" <?php if(old('Kelas') == '7e'): ?> selected <?php endif; ?>>7e
                                </option>
                                <option value="8a" <?php if(old('Kelas') == '8a'): ?> selected <?php endif; ?>>
                                    8a
                                </option>
                                <option value="8b" <?php if(old('Kelas') == '8b'): ?> selected <?php endif; ?>>8b
                                </option>
                                <option value="8c" <?php if(old('Kelas') == '8c'): ?> selected <?php endif; ?>>8c
                                </option>
                                <option value="8d" <?php if(old('Kelas') == '8d'): ?> selected <?php endif; ?>>8d
                                </option>
                                <option value="8e" <?php if(old('Kelas') == '8e'): ?> selected <?php endif; ?>>8e
                                </option>
                                <option value="9a" <?php if(old('Kelas') == '9a'): ?> selected <?php endif; ?>>
                                    9a
                                </option>
                                <option value="9b" <?php if(old('Kelas') == '9b'): ?> selected <?php endif; ?>>9b
                                </option>
                                <option value="9c" <?php if(old('Kelas') == '9c'): ?> selected <?php endif; ?>>9c
                                </option>
                                <option value="9d" <?php if(old('Kelas') == '9d'): ?> selected <?php endif; ?>>9d
                                </option>
                                <option value="9e" <?php if(old('Kelas') == '9e'): ?> selected <?php endif; ?>>9e
                                </option>

                            </select>
                            <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Nama Lomba</label>
                            <input type="text" name="lomba"
                                class="form-control  <?php $__errorArgs = ['lomba'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('lomba')); ?>">
                            <?php $__errorArgs = ['lomba'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label">Penyelenggara</label>
                            <input type="text" name="penyelenggara"
                                class="form-control <?php $__errorArgs = ['penyelenggara'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('penyelenggara')); ?>">
                            <?php $__errorArgs = ['penyelenggara'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="input-group col-12 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Tingkatan</label>
                            </div>
                            <select class="form-control <?php $__errorArgs = ['tingkat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tingkat">
                                <option value="">Pilih Tingkatan</option>
                                <option value="Desa/Lurah" <?php if(old('tingkat') == 'Desa/Lurah'): ?> selected <?php endif; ?>>
                                    Desa/Lurah</option>
                                <option value="Kecamatan" <?php if(old('tingkat') == 'Kecamatan'): ?> selected <?php endif; ?>>
                                    Kecamatan</option>
                                <option value="Kota/Kabupaten" <?php if(old('tingkat') == 'Kota/Kabupaten'): ?> selected <?php endif; ?>>
                                    Kota/Kabupaten</option>
                                <option value="Provinsi" <?php if(old('tingkat') == 'Provinsi'): ?> selected <?php endif; ?>>Provinsi
                                </option>
                                <option value="Nasional" <?php if(old('tingkat') == 'Nasional'): ?> selected <?php endif; ?>>
                                    Nasional</option>
                                <option value="Internasional" <?php if(old('tingkat') == 'Internasional'): ?> selected <?php endif; ?>>
                                    Internasional</option>
                            </select>
                            <?php $__errorArgs = ['tingkat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-lg-4">
                            <label for="date" class="form-label">Tanggal</label>
                            <input class="form-control <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date"
                                name="date" value="<?php echo e(old('date')); ?>" id="date">
                            <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-lg-8">
                            <label for="formFile" class="form-label">Upload Sertifikat</label>

                            <input class="form-control <?php $__errorArgs = ['sertifikat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="sertifikat"
                                type="file">
                            <?php $__errorArgs = ['sertifikat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php /**PATH C:\laragon\www\Topic-SI-Prestasi1\resources\views/admin/includes/lomba/modalTambahLomba.blade.php ENDPATH**/ ?>