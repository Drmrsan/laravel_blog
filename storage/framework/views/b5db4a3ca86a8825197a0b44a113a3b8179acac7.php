<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel Blog <?php echo $__env->yieldContent('title'); ?></title>

  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">


	<?php echo $__env->yieldContent('stylesheets'); ?>
	
  </head>
  <body>