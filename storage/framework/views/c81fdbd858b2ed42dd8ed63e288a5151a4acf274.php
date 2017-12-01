<?php $__env->startSection('title', '| View Post'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8">
			<h1><?php echo e($post->title); ?></h1>
			<p class='lead'><?php echo e($post->body); ?></p>
			<hr>
			<div class="tags">
				<?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<span class="label label-default"><?php echo e($tag->name); ?></span>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>



		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="<?php echo e(route('blog.single', $post->slug)); ?>"><?php echo e(route('blog.single', $post->slug)); ?></a></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Category:</label>
					<p><?php echo e($post->category->name); ?></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p><?php echo e(date('M j, Y, H:i', strtotime($post->created_at))); ?></p>
				</dl>
				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p><?php echo e(date('M j, Y, H:i', strtotime($post->updated_at))); ?></p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<?php echo Html::linkRoute('posts.edit', 'Edit', [$post->id], ['class'=>'btn btn-primary btn-block']); ?>

					</div>
					<div class="col-sm-6">
						<?php echo Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']); ?>


							<?php echo Form::submit('Delete', ['class'=>'btn btn-danger btn-block']); ?>


						<?php echo Form::close(); ?>

					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php echo e(Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing'])); ?>

					</div>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>