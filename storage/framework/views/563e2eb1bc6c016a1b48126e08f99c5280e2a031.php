<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-7">

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Roupa</th>
                    <th>Tamanho</th>
                    <th>Ação</th>
                </tr>

                <?php $__currentLoopData = $roupas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($items->id); ?></td>
                        <td><?php echo e($items->descricaoRoupas); ?></td>
                        <td>
                            <?php $__currentLoopData = $items->tamanhos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="tag"><?php echo e($tag->descricaoTamanho); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                         </td>
                        <td>
     <a href="<?php echo e(route('editar',$items->id)); ?>" class="btn btn-warning">Editar</a>
     <form action="<?php echo e(route ('eliminar',$items->id)); ?>" method="POST" class="d-inline">
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



</div>


<div class="col-md-5">

<h3 class="text-center">Agregar Roupas</h3>
<form action="<?php echo e(route('storeRoupa')); ?>" method="POST" >
<?php echo csrf_field(); ?>

<div class="form-group">
<input type="text" name="descricaoRoupas" id="descricaoRoupas" class="form-control" placeholder="Descricao Roupa" required>
</div>

<div class="form-group">
<select class="form-control" name="tamanho_id" id="tamanho_id">
 <?php $__currentLoopData = $tamanhos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($item->id); ?>" ><?php echo e($item->descricaoTamanho); ?></option>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>


<?php if ($errors->has('descricaoRoupas')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('descricaoRoupas'); ?>
<div class="alert alert-danger">
A descricao da roupa e requerida

</div>
<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

<button type="submit" class="btn btn-success btn-block">Adicionar Roupa</button>


</form>

<?php if(session('agregar')): ?>
<div class="alert alert-success mt-3">
<?php echo e(session('agregar')); ?>


</div>
<?php endif; ?>





</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel/blog/resources/views/roupas.blade.php ENDPATH**/ ?>