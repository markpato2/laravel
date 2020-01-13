<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-7">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Ação</th>
                </tr>
                <?php $__currentLoopData = $notas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->nombre); ?></td>
                        <td><?php echo e($item->descricao); ?></td>
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

            <?php echo e($notas->links()); ?>


        </div>


        <div class="col-md-5">

            <h3 class="text-center">Agregar Notas</h3>
            <form action="<?php echo e(route('store')); ?>" method="POST" >
              <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la Nota" required>
                </div>
                <?php if ($errors->has('nombre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre'); ?>
                <div class="alert alert-danger">
                    El nombre es requerido

                </div>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                <div class="form-group">
                    <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descricao" required>
                </div>

                <?php if ($errors->has('descricao')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('descricao'); ?>
                <div class="alert alert-danger">
                    A descricao e requerida

                </div>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                <button type="submit" class="btn btn-success btn-block">Enviar Nota</button>


            </form>

            <?php if(session('agregar')): ?>
                <div class="alert alert-success mt-3">
                    <?php echo e(session('agregar')); ?>


                </div>
            <?php endif; ?>





        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel/blog/resources/views/inicio.blade.php ENDPATH**/ ?>