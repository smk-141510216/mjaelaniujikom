  

                

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Pegawai</center></div>

                <div class="panel-body">
                     <table class="table" border='2'>
                    <thead>
                <tr>
                    <th><center>No.</center></th>
                    <th><center>Nip</center></th>
                    <th><center>Pengguna</center></th>
                    <th><center>Email</center></th>
                    <th><center>Golongan</center></th>
                    <th><center>Jabatan</center></th>
                    <th><center>Foto</center></th>
                    <th><center>Opsi</center></th>

                </tr>
                </thead>
                <?php 
                $no=1;
                 ?>
                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tbody>
                        <tr>
                            <td><center><?php echo e($no++); ?></center></td>
                            <td><center><?php echo e($data->nip); ?></center></td>                                   
                            <td><center><?php echo e($data->User->name); ?></center></td>
                            <td><center><?php echo e($data->User->email); ?></center></td>
                            <td><center><?php echo e($data->golongan->nama_golongan); ?></center></td>
                            <td><center><?php echo e($data->jabatan->nama_jabatan); ?></center></td>
                            <td><center><img src="/assets/image/<?php echo e($data->foto); ?>" width="50px" height="50px"></center></td>
                            <td><center>
                                <a href="<?php echo e(route('pegawai.edit',$data->id)); ?>" class="btn btn-primary">Ubah</a>
                            </center></td>
                        </tr>

                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>