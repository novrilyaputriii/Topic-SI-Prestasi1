<!-- Modal -->
<div class="modal fade" id="modalLomba" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Data Lomba</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table table-hover table-bordered" id="tabelLomba">
                <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>KELAS</th>
                        <th>LOMBA</th>
                        <th>PENYELENGGARA</th>
                        <th>TINGKAT</th>
                        <th>TANGGAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($get_lomba->count()): ?>
                        <?php $__currentLoopData = $get_lomba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($post->name); ?></td>
                                <td><?php echo e($post->user_id); ?></td>
                                <td><?php echo e($post->lomba); ?></td>
                                <td><?php echo e($post->penyelenggara); ?></td>
                                <td><?php echo e($post->tingkat); ?></td>
                                <td><?php echo e($post->tanggal); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="alert alert-danger">
                            Data belum tersedia !
                        </div>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>
<?php /**PATH C:\laragon\www\Topic-SI-Prestasi1\resources\views/admin/includes/dashboard/modalLomba.blade.php ENDPATH**/ ?>