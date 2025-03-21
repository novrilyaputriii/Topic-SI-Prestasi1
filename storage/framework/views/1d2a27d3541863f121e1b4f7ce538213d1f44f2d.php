<?php $__env->startSection('content'); ?>
<div class="app-title">
    <div>
        <h1><i class="icon bi bi-trophy"></i> Manajemen Prestasi</h1>
        <p>Laman untuk manajemen data prestasi</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
        <li class="breadcrumb-item"><a href="/prestasi">Manajemen Prestasi</a></li>
    </ul>
</div>

    <!-- Card Manajamen Prestasi -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <?php if($kejuaraan->count()): ?>
                            <a href="<?php echo e(route('download')); ?>" id="pdf" type="button" onclick="myFunction()"
                                class="btn btn-outline-success mb-3" target="blank">Download
                                <i class="bi bi-download"></i>
                            </a>
                        <?php else: ?>
                        <?php endif; ?>
                        <?php if(session('sukses')): ?>
                            <div class="bs-component">
                                <div class="alert alert-dismissible alert-success">
                                    <button class="btn-close" type="button"
                                        data-bs-dismiss="alert"></button><?php echo e(session('sukses')); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if(session('failed')): ?>
                            <div class="bs-component">
                                <div class="alert alert-dismissible alert-danger">
                                    <button class="btn-close" type="button"
                                        data-bs-dismiss="alert"></button><?php echo e(session('failed')); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <table class="table table-bordered" id="tabelPrestasi">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">nisn</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Prestasi</th>
                                    <th scope="col">Nama Lomba</th>
                                    <th scope="col">Penyelenggara</th>
                                    <th scope="col">Tingkat</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $kejuaraan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->index + 1); ?></th>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->nisn); ?></td>
                                        <td><?php echo e($item->Kelas); ?></td>
                                        <td><?php echo e($item->juara); ?></td>
                                        <td><?php echo e($item->lomba); ?></td>
                                        <td><?php echo e($item->penyelenggara); ?></td>
                                        <td><?php echo e($item->tingkat); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y')); ?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#modalEditPrestasi-<?php echo e($item->id); ?>">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalHapusPrestasi-<?php echo e($item->id); ?>">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                                
                                            </div>
                                        </td>
                                        <?php echo $__env->make('admin.includes.prestasi.modalHapusPrestasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('admin.includes.prestasi.modalEditPrestasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Tabel Prestasi-->
    </div>
    <!-- End Card Manajamen Prestasi -->
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
    
    <script type="text/javascript" src=" <?php echo e(asset('admins/js/plugins/jquery.dataTables.min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('admin/js/plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">
        $('#tabelPrestasi').DataTable({
            "lengthMenu": [5, 10, 20, 30, 50],
            "pageLength": 5
        });
    </script>
    </script>

    <script>
        function myFunction() {
            document.getElementById("pdf").onclick = open('download').print();
            location.reload();
        }
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Topic-SI-Prestasi1\resources\views/admin/prestasi.blade.php ENDPATH**/ ?>