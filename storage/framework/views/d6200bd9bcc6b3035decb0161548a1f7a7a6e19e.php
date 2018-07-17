<?php $__env->startSection('content'); ?>

<h1 style="text-align:center">[ DATA RENTAL DVD ]</h1>
<div style="overflow-x:scroll; overflow-y:scroll;">
	<table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>ID Member</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No. Hp</th>
        <th>Judul DVD</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Biaya</th>
				<th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php $__currentLoopData = $rental; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datarental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <tr>
          <td><?php echo e($datarental->member_id); ?></td>
          <td><?php echo e($datarental->nama); ?></td>
          <td><?php echo e($datarental->alamat); ?></td>
          <td><?php echo e($datarental->no_hp); ?></td>
          <td><?php echo e($datarental->judul_dvd); ?></td>
          <td><?php echo e($datarental->tanggal_pinjam); ?></td>
          <td><?php echo e($datarental->tanggal_kembali); ?></td>
          <td><?php echo e($datarental->biaya); ?></td>
          <td>
            <a href="<?php echo e(Route('delete', ['id' => $datarental->id])); ?>" class="btn btn-danger btn-xs" >Hapus</a>
            
						<a href="<?php echo e(Route('edit', ['id' => $datarental->id])); ?>" class="btn btn-warning btn-xs">Edit</a>
            

          </td>
        </tr>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Data.Layouts.Master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>