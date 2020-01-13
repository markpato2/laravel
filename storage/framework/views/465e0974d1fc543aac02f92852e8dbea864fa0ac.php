<?php $__env->startSection('content'); ?>

    <h3 class="text-center mb-3 pt-3">Editar la nota <?php echo e($notaActualizar->id); ?></h3>

    <form action="<?php echo e(route('update',$notaActualizar->id)); ?>" method="POST" >
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo e($notaActualizar->nombre); ?>" required>
        </div>

        <div class="form-group">
            <input type="text" name="descricao" id="descricao" class="form-control" value="<?php echo e($notaActualizar->descricao); ?>" required>
        </div>

        <button type="submit" class="btn btn-warning btn-block">Editar Nota</button>


    </form>

    <?php if(session('update')): ?>
        <div class="alert alert-success mt-3">
            <?php echo e(session('update')); ?>


        </div>
    <?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel/blog/resources/views/editar.blade.php ENDPATH**/ ?>