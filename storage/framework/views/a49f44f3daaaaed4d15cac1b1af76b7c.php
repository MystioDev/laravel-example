<?php $__env->startSection('content'); ?>
    <h1>Show</h1>

    <h1><?php echo e($team->name); ?></h1>
    <h2><?php echo e($team->contact); ?></h2>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/myst1o/dev/school/laravel/football_championship/resources/views/teams/show.blade.php ENDPATH**/ ?>