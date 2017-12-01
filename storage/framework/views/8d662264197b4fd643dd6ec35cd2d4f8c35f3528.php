<?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('includes/navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    <div class="container">
        
        <?php echo $__env->make('partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <?php echo $__env->yieldContent('content'); ?>

    </div>

<?php echo $__env->make('partials._foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
