<?php $__env->startSection('title', '| Create Post'); ?>

<?php $__env->startSection('stylesheets'); ?>
	<?php echo Html::style('css/parsley.css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			<?php echo Form::open(['route'=>'posts.store', 'data-parsley-validate' => "", 'files' => true]); ?>

				<?php echo Form::label('title', 'Title:'); ?>

				<?php echo Form::text('title', null, ['class' => 'form-control', 'required' => '', 'minLength' => '3', 'maxLength' => '255']); ?>


				<?php echo Form::label('slug', 'Slug:'); ?>

				<?php echo Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minLength' => '5', 'maxLength' => '255']); ?>


				<?php echo Form::label('category_id', 'Category:'); ?>

				<?php echo Form::select('category_id', $categories, null, ['class' => 'form-control']); ?>


				<?php echo Form::label('tags', 'Tags:'); ?>

				<?php echo Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multiple', 'multiple' => 'multiple']); ?>


				<?php echo Form::label('featured_image', 'Featured image'); ?>

				<?php echo Form::file('featured_image'); ?>


				<?php echo Form::label('body', 'Post content:'); ?>

				<?php echo Form::textarea('body', null, ['class' => 'form-control', 'required' => '']); ?>


				<?php echo Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px']); ?>

			<?php echo Form::close(); ?>



		</div>
	</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
	<?php echo Html::script('js/parsley.min.js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>