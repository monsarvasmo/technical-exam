 
<?php $__env->startSection('title', 'Notes'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
    <?php $__env->stopPush(); ?>

        <div class="container">
            <h1>Hi!</h1>
        </div>
    
    <?php $__env->startPush('script'); ?> 
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project/resources/views/welcome.blade.php ENDPATH**/ ?>