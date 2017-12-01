<?php $__env->startSection('title', '| Contact'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<h1>Contact me</h1>
    			
    			<hr>

				<form action="<?php echo e(url('contact')); ?>" method="POST">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="">Email:</label>
						<input type="email" id="email" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="">Subject:</label>
						<input type="text" id="subject" name="subject" class="form-control">
					</div>

					<div class="form-group">
						<label for="">Message:</label>
						<textarea type="text" id="message" name="message" class="form-control"></textarea>
					</div>

					<input type="submit" class="btn btn-success">
				</form>
    		</div>
    	</div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>