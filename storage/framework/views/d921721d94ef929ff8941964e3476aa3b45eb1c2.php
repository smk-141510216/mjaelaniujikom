<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table"d border="2">
                        <thead>
                            <tr>
                                <th><center>No</th></center>
                                <th><center>Nip Pegawai</th></center>
                                <th><center>uang Tunjangan</th></center>
                            </tr>
                        </thead>
                        <?php 
                        $a=1;
                         ?>
                        <?php $__currentLoopData = $tunjangan_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tbody>
                            <td><center><?php echo e($a++); ?></td></center>
                            <td><center><?php echo e($data->pegawai->nip); ?></td></center>
                            <td><center><?php echo e($data->tunjangan->besaran_uang); ?></td></center>
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