<?php $__env->startSection('content'); ?>
    <h1>Index</h1>

    <div class="">
        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="">
                <h1><?php echo e($team->name); ?></h1>
                <p><?php echo e($team->contact); ?></p>

                <a href="<?php echo e(route('teams.edit', $team->id)); ?>">Módosítás</a>
                <a href="<?php echo e(route('teams.show', $team->id)); ?>">Részletek</a>
                <form action="<?php echo e(route('teams.destroy', $team->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit">Törlés</button>
                </form>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/myst1o/dev/school/laravel/football_championship/resources/views/teams/index.blade.php ENDPATH**/ ?>