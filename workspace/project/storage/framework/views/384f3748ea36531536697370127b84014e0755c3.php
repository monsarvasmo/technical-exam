 
<?php $__env->startSection('title', 'Todos'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
    <?php $__env->stopPush(); ?>

    <div id="todo-edit-page">
        <div class="container">

            <div class="row">
                <div class="page-header-title">
                    <h5><?php echo e(__('Edit To do')); ?></h5>
                    <span><?php echo e(__('Update new to do')); ?></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <form>
                    <input type="text" id="todo-id" value="<?php echo e($res->id); ?>" hidden>
                    <div class="form-group">
                        <label for="todo">Title</label>
                        <input type="input" class="form-control" id="todo" value="<?php echo e($res->title); ?>" value placeholder="Enter what do you want to do...">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submitBtn" style="margin-top: 15px;" class="btn btn-primary mb-2">Add To Do</button>
                        <a href="<?php echo e(url('/todos')); ?>" style="margin-top: 15px;" class="btn btn-secondary mb-2">Back</a>
                    </div>

                </form>
                </div>
            </div>

        </div>

    </div>  
    
    <?php $__env->startPush('script'); ?> 
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project/resources/views/todo/update.blade.php ENDPATH**/ ?>