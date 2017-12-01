<?php if(session()->has('success')): ?>
	
	<div class="alert alert-success" role="alert" >
		<?php echo e(session()->get('success')); ?>

	</div>

<?php endif; ?>


<?php if(session()->has('logout-flash')): ?>
	
	<div class="alert alert-warning" role="alert" >
		<?php echo e(session()->get('logout-flash')); ?>

	</div>

<?php endif; ?>



<?php if(count($errors) > 0): ?>
	
	<div class="alert alert-danger" role="alert">
		<strong>Errors:</strong>
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>

<?php endif; ?>