<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Tech Exam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<?php
    $segment1 = request()->segment(1);
?>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link <?php echo e(($segment1 == 'notes') ? 'active' : ''); ?>" href="<?php echo e(url('notes')); ?>" >Take Note <span class="sr-only"></span></a>
      <a class="nav-item nav-link <?php echo e(($segment1 == 'todo') ? 'active' : ''); ?>" href="<?php echo e(url('todos')); ?>">To do <span class="sr-only"></span></a>
    </div>
  </div>
</nav><?php /**PATH /var/www/html/project/resources/views/include/header.blade.php ENDPATH**/ ?>