

<!-- <?php $__env->startSection('title', 'Home Page'); ?>
<?php $__env->startSection('description', 'this is homepage Description'); ?>
<?php $__env->startSection('keyowrds','comma, separated, list, of, relevant, keywords'); ?> -->

<?php $__env->startSection('content'); ?>
   <?php echo $__env->make('component.homemain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppeighttwo\htdocs\laravel\ass-module-15\resources\views/page/home.blade.php ENDPATH**/ ?>