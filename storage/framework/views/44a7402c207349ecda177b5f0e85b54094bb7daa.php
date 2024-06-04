<!-- Modal Register -->
<div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-person-plus"></i> Register Akun</h1>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('proses_register')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group mb-3">
                        <label class="form-label">Nama</label>
                        <div class="wrap-input100 validate-input input-group">
                            <span class="input-group-text bg-white text-muted">
                                <i class="bi bi-person-badge"></i>
                            </span>
                            <input type="text" name="name"
                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>"
                                placeholder="Isi dengan nama lengkap">
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
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Jurusan</label>
                        <div class="wrap-input100 validate-input input-group">
                            <span class="input-group-text bg-white text-muted">
                                <i class="bi bi-chevron-double-right"></i>
                            </span>
                            <select name="jurusan" class="form-control <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value="7a" <?php if(old('jurusan') == '7a'): ?> selected <?php endif; ?>>7a
                                </option>
                                <option value="7b" <?php if(old('jurusan') == '7b'): ?> selected <?php endif; ?>>7b
                                </option>
                                <option value="7c" <?php if(old('jurusan') == '7c'): ?> selected <?php endif; ?>>7c
                                </option>
                                <option value="8a" <?php if(old('jurusan') == '8a'): ?> selected <?php endif; ?>>8a
                                </option>
                                <option value="8b" <?php if(old('jurusan') == '8b'): ?> selected <?php endif; ?>>8b
                                </option>
                                <option value="8c" <?php if(old('jurusan') == '8c'): ?> selected <?php endif; ?>>8c
                                </option>
                                <option value="9a" <?php if(old('jurusan') == '9a'): ?> selected <?php endif; ?>>9a
                                </option>
                                <option value="9b" <?php if(old('jurusan') == '9b'): ?> selected <?php endif; ?>>9b
                                </option>
                                <option value="9c" <?php if(old('jurusan') == '9c'): ?> selected <?php endif; ?>>9c
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
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="wrap-input100 validate-input input-group">
                            <span class="input-group-text bg-white text-muted">
                                <i class="bi bi-chevron-double-right"></i>
                            </span>
                            <select name="gender" class="form-control" required>
                                <option value="Laki-Laki" <?php if(old('gender') == 'Laki-Laki'): ?> selected <?php endif; ?>>
                                    Laki-Laki</option>
                                <option value="Perempuan" <?php if(old('gender') == 'Perempuan'): ?> selected <?php endif; ?>>
                                    Perempuan</option>
                            </select>
                            <?php $__errorArgs = ['gender'];
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

                    <div class="form-group mb-3">
                        <label class="form-label">Email</label>
                        <div class="wrap-input100 validate-input input-group">
                            <span class="input-group-text bg-white text-muted">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" name="email"
                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>"
                                placeholder="Isi dengan email yang valid">
                            <?php $__errorArgs = ['email'];
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

                    <div class="form-group mb-3">
                        <label class="form-label">NPM</label>
                        <div class="wrap-input100 validate-input input-group">
                            <span class="input-group-text bg-white text-muted">
                                <i class="bi bi-person-lock"></i>
                            </span>
                            <input type="text" name="username"
                                class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('username')); ?>" placeholder="Isi dengan NPM/NIM yang valid">
                            <?php $__errorArgs = ['email'];
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

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <div class="wrap-input100 validate-input input-group">
                            <span class="input-group-text bg-white text-muted">
                                <i class="bi bi-key"></i>
                            </span>
                            <input class="input100 form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('password')); ?>" name="password" type="password"
                                placeholder="Tambahkan password">
                            <?php $__errorArgs = ['email'];
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
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\Topic-SI-Prestasi\resources\views/auth/includes/modalRegister.blade.php ENDPATH**/ ?>