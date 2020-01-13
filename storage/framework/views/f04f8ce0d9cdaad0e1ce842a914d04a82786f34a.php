<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-7">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Tamanho</th>
                    <th>Ação</th>
                </tr>
                <?php $__currentLoopData = $tamanhos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->descricaoTamanho); ?></td>
                        <td>
                            <a href="<?php echo e(route('editar',$item->id)); ?>" class="btn btn-warning">Editar</a>
                            <form action="<?php echo e(route ('eliminar',$item->id)); ?>" method="POST" class="d-inline">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger">Eliminar</button>

                            </form>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php if(session('eliminar')): ?>
                <div class="alert alert-success mt-3">
                    <?php echo e(session('eliminar')); ?>


                </div>
            <?php endif; ?>

            <?php echo e($tamanhos->links()); ?>


        </div>


        <div class="col-md-5">

            <h3 class="text-center">Agregar Tamanhos</h3>
            <form action="<?php echo e(route('storeTamanho')); ?>" method="POST" >
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <input type="text" name="descricaoTamanho" id="descricaoTamanho" class="form-control" placeholder="Descricao Tamanho" required>
                </div>

                <?php if ($errors->has('descricaoTamanho')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('descricaoTamanho'); ?>
                <div class="alert alert-danger">
                    A descricao do tamanho e requerida

                </div>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                <button type="submit" class="btn btn-success btn-block">Adicionar Tamanho</button>


            </form>

            <?php if(session('agregar')): ?>
                <div class="alert alert-success mt-3">
                    <?php echo e(session('agregar')); ?>


                </div>
            <?php endif; ?>





        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel/blog/resources/views/tamanho.blade.php ENDPATH**/ ?>