 
<?php $__env->startSection('title', 'Notes'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
    <?php $__env->stopPush(); ?>

    <div id="note-edit-page">
        <div class="container">

            <div class="row">
                <div class="page-header-title">
                    <h5><?php echo e(__('Edit Note')); ?></h5>
                    <span><?php echo e(__('Update note')); ?></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <form>
                    <input type="text" id="note-id" value="<?php echo e($res->id); ?>" hidden>
                    <div class="form-group">
                        <label for="note-title">Title</label>
                        <input type="input" class="form-control" id="note-title" placeholder="Enter Title here..." value="<?php echo e($res->title); ?>">
                    </div>
                    <div class="form-group">
                        <label for="note">Note:</label>
                        <textarea class="form-control" id="note" rows="3"><?php echo e($res->note); ?></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submitBtn" style="margin-top: 15px;" class="btn btn-primary mb-2" >Update Note</button>
                        <a href="<?php echo e(url('/notes')); ?>" style="margin-top: 15px;" class="btn btn-secondary mb-2">Back</a>
                    </div>

                </form>
                </div>
            </div>
        </div>



    </div>  
    
    <?php $__env->startPush('script'); ?> 
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project/resources/views/note/update.blade.php ENDPATH**/ ?>