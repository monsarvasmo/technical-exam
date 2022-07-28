 
<?php $__env->startSection('title', 'Notes'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
    <?php $__env->stopPush(); ?>

    <div id="note-page">
        <div class="container">

            <div class="row">
                <div class="page-header-title">
                    <h5><?php echo e(__('Add Note')); ?></h5>
                    <span><?php echo e(__('Create new note')); ?></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label for="note-title">Title</label>
                        <input type="input" class="form-control" id="note-title" placeholder="Enter Title here...">
                    </div>
                    <div class="form-group">
                        <label for="note">Note:</label>
                        <textarea class="form-control" id="note" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submitBtn" style="margin-top: 15px;" class="btn btn-primary mb-2">Add Note</button>
                    </div>

                </form>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                    <?php if(count($notes) > 0): ?>
                     <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(!$note->is_deleted): ?>
                        <div class="card w-100" style="margin-top: 10px;" id="note-<?php echo e($note->id); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($note->title); ?></h5>
                                <p class="card-text"><?php echo e($note->note); ?></p>
                                <i style="color: #6c757d;"><?php echo e(date_format($note->created_at, "g:ia \o\n l jS F Y")); ?></i>
                                <p class="button-group">
                                    <a href="<?php echo e(url('note/edit').'/'.$note->id); ?>">Edit</a>
                                    <a href="javasscript:void(0)" onclick="deleteNote(<?php echo e($note->id); ?>)">Delete</a>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>



    </div>  
    
    <?php $__env->startPush('script'); ?> 
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project/resources/views/note/index.blade.php ENDPATH**/ ?>