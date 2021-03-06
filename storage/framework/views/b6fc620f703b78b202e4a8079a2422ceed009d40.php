<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <?php echo $__env->yieldContent('scriptsJs'); ?>


    <title>Laravel</title>
</head>
<body>
<ul class="nav justify-content-end bg-dark">
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo e(route('inicio')); ?>">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('tamanhos')); ?>">Tamanhos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('roupas')); ?>">Roupas</a>
    </li>
    <li class="nav-item">
        <a class="nav-item" href="<?php echo e(route('pais')); ?>" >Pais</a>
    </li>
</ul>

<div class="container pt-5">
    <?php echo $__env->yieldContent('content'); ?>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/laravel/blog/resources/views/plantilha.blade.php ENDPATH**/ ?>