<?php $__env->startSection('title', '|' .  e($post->title)); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<img src="<?php echo e(asset('images/' . $post->image)); ?>" alt="" />
			<h1> <?php echo e($post->title); ?> </h1>
			<p> <?php echo e($post->body); ?> </p>
			<hr>
			<p>Article posted in category: <?php echo e($post->category->name); ?></p>
		</div>
	</div>
	<hr>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
					
				<h2>Comments:</h2>

				<?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="well">
						<h4>Name: <?php echo e($comment->name); ?></h4>
						<h4>Email: <?php echo e($comment->email); ?></h4>
						<p>Comment: <?php echo e($comment->comment); ?></p>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</div>
	</div>

	<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2">
			<?php echo Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']); ?>

				<div class="row">
					<div class="col-md-6">
						<?php echo Form::label('name', 'Name:'); ?>

						<?php echo Form::text('name', null, ['class' => 'form-control']); ?>

					</div>
					<div class="col-md-6">
						<?php echo Form::label('email', 'Email:'); ?>

						<?php echo Form::text('email', null, ['class' => 'form-control']); ?>

					</div>
					<div class="col-md-12">
						<?php echo Form::label('comment', 'Comment:'); ?>

						<?php echo Form::textarea('comment', null, ['class' => 'form-control', 'rows' => 5]); ?>


						<?php echo Form::submit('Add comment', ['class' => 'btn btn-success btn-block form-spacing-top']); ?>

					</div>
				</div>
			<?php echo Form::close(); ?>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>