<?php $__env->startSection('title', '| Blog' ); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-12">
			<h1>Blog</h1>
		</div>
	</div>

	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
		<div class="row">
			<div class="col-md-8 col-md-2">
				<h2><?php echo e($post->title); ?></h2>
				<h5>Published: <?php echo e(date('M j, Y', strtotime($post->created_at))); ?></h5>

				<p><?php echo e(substr($post->body, 0, 250)); ?> <?php echo e(strlen($post->body) > 250 ? '...' : ""); ?></p>
				<a href="<?php echo e(route('blog.single', $post->slug)); ?>">read more</a>
			</div>
		</div>
	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<div class="row">
		<div class="col-md-12 text-center">
			<?php echo $posts->links(); ?>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>