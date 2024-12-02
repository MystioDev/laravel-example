<?php $__env->startSection('content'); ?>
    <h1>Edit</h1>

    <form action="<?php echo e(route('teams.update', $team->id)); ?>" method="post">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label for="name">Csapat neve:</label>
        <input type="text" name="name" value="<?php echo e(old('name', $team->name)); ?>">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class=""><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label for="contact">Csapat elérhetősége:</label>
        <input type="text" name="contact" value="<?php echo e(old('contact', $team->contact)); ?>">
        <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class=""><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button type="submit">Beküld</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/myst1o/dev/school/laravel/football_championship/resources/views/teams/edit.blade.php ENDPATH**/ ?>