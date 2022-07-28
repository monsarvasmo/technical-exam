<!doctype html>
<html >
<head>
	<title><?php echo $__env->yieldContent('title',''); ?> | <?php echo e(env('APP_NAME','Technical Exam')); ?></title>
	<!-- initiate head with meta tags, css and script -->
	<?php echo $__env->make('include.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body id="app" >
    <div class="wrapper">
    	<!-- initiate header-->
    	<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    	<div class="page-wrap">

	    	<div class="main-content">
	    		<!-- yeild contents here -->
	    		<?php echo $__env->yieldContent('content'); ?>
	    	</div>

    	</div>
    </div>
    
	<!-- initiate modal menu section-->
</body>
</html><?php /**PATH /var/www/html/project/resources/views/layouts/main.blade.php ENDPATH**/ ?>