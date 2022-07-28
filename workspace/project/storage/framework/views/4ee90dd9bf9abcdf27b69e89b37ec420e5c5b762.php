 
<?php $__env->startSection('title', 'Todos'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
    <?php $__env->stopPush(); ?>

    <div id="todo-page">
        <div class="container">

            <div class="row">
                <div class="page-header-title">
                    <h5><?php echo e(__('Add To do')); ?></h5>
                    <span><?php echo e(__('Create new to do')); ?></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label for="todo">Title</label>
                        <input type="input" class="form-control" id="todo" placeholder="Enter what do you want to do...">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submitBtn" style="margin-top: 15px;" class="btn btn-primary mb-2">Add To Do</button>
                    </div>

                </form>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12">
                    <?php if(count($todos) > 0): ?>
                     <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(!$todo->is_deleted): ?>
                        <div class="card w-100" style="margin-top: 10px;" id="todo-<?php echo e($todo->id); ?>">
                            <div class="card-body">
                                <h5 class="card-title" id="done-todo-<?php echo e($todo->id); ?>" style=" <?php echo e(($todo->is_done == 1) ? 'text-decoration: line-through' : ''); ?>" ><?php echo e($todo->title); ?></h5>
                                <p class="button-group">
                                    <?php if(!$todo->is_done): ?>
                                    <a href="#" id="done-btn-<?php echo e($todo->id); ?>" onclick="toggleTodo(<?php echo e($todo->id); ?>)">Mark as done</a>
                                    <?php endif; ?>
                                    <a href="<?php echo e(url('todo/edit').'/'.$todo->id); ?>">Edit</a>
                                    <a href="javasscript:void(0)" onclick="deleteTodo(<?php echo e($todo->id); ?>)">Delete</a>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project/resources/views/todo/index.blade.php ENDPATH**/ ?>