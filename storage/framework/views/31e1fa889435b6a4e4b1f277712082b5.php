<title><?php echo e(config('chatify.name')); ?></title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="route" content="<?php echo e($route); ?>">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


<link href="<?php echo e(asset('css/chatify/style.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('css/chatify/'.$dark_mode.'.mode.css')); ?>" rel="stylesheet" />



<?php echo $__env->make('Chatify::layouts.messengerColor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\xampp\htdocs\codecanyon-33263426-erpgo-saas-all-in-one-business-erp-with-project-account-hrm-crm\resources\views/vendor/Chatify/layouts/headLinks.blade.php ENDPATH**/ ?>