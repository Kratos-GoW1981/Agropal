
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('AgroPal', 'AgroPal')); ?></title>
    <link rel="shortcut icon" href="/img/Tlogo.png" >

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <!-- Styles -->
<link href="<?php echo e(asset('css/dashboard.css')); ?>" rel="stylesheet">
</head>
<style>
  body
{
    background-image: url('/img/bg.jpg');
}  
</style>
<body>
    <nav class="navbar">
        <span class="openslide">
            <a href="#" onclick="opensidemenu()">
            <i class="fas fa-bars"><span style="margin-left: 20px">Menu</span></i>
            </a>
        </span>
    </nav>
    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closesidemenu()">&times;</a>
        <br>
        <center>
        <img src="/img/Tlogo.png" style="height:50px; width:50px;"></center>
        <a href="/dashboard">Home</a> <br>
        <a href="/admin_user_details">User Details</a> <br>
        <a href="/admin_product_details">Product Details</a> <br>
        <a href="/reg_buyer">Register buyer</a> <br>
        <a href="/reg_seller">Regster Seller</a><br>
        <a href="/orders">Recent Orders</a><br>
        <a href="/contact/messages">Contact Message</a><br>
        

    </div>
    <div id="main">
    <center><h1>Hello! Admin, you can view all <b><u>user details</u></b> here.<hr></h1></center>
    <br><br>
    <center>
    <table class="table table-dark table-hover">
    <tr>
      <th scope="col"><h1>User ID<hr></h1></th><th></th><th></th><th></th><th></th>
      <th scope="col"><h1>User Name<hr></h1></th><th></th><th></th><th></th><th></th>
      <th scope="col"><h1>Email-address<hr></h1></th><th></th><th></th><th></th><th></th>
      <th scope="col"><h1>Contact number<hr></h1></th><th></th><th></th><th></th><th></th>
    </tr>
    
    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
      <th scope="col"><p><?php echo e($user->id); ?><hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p><?php echo e($user->name); ?><hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p><?php echo e($user->email); ?><hr></p></th><th></th><th></th><th></th><th></th>
      <th scope="col"><p><?php echo e($user->number); ?><hr></p></th><th></th><th></th><th></th><th></th>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>
    </table>
</center>

</div>
    <script>
    function opensidemenu(){
        document.getElementById('side-menu').style.width='250px';
        document.getElementById('main').style.marginLeft='250px';   
    }
    function closesidemenu(){
        document.getElementById('side-menu').style.width='0px';
        document.getElementById('main').style.marginLeft='0px';
    }
    </script>
</body>
<script>

</script><?php /**PATH C:\xampp\htdocs\Agriculture_Online_platform(AgroPal)\resources\views/admin/userdetails.blade.php ENDPATH**/ ?>