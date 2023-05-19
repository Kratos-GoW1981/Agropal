<!doctype html>
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
    <script src="<?php echo e(asset('js/style.js')); ?>"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">
              <img src="/img/Tlogo.png" alt="logo" style="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link active" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="/shop">Shop</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-envelope email"></i> agropal@gmail.com</a>
                </li>
      
                <?php if(auth()->guard()->guest()): ?>
                                <a class="nav-link" href="<?php echo e(route('login')); ?>" id="login"><?php echo e(__('Login')); ?></a>
                            <?php if(Route::has('register')): ?>
                            <a class="nav-link" href="<?php echo e(route('register')); ?>" id="signup"><?php echo e(__('Register')); ?></a>
                                
                            <?php endif; ?>
                        <?php else: ?>
                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                <?php if(auth::user()->is_admin == 1): ?>
                                  <a class="dropdown-item"href="/dashboard"><i class="fas fa-user-circle"></i>Dashboard</a>
                                                
                                <?php else: ?>
                                <a class="dropdown-item"href="/account"><i class="fas fa-user-circle"></i> My Account</a>
                              
                                <a class="dropdown-item"href="/shop"><i class="fas fa-store"></i> Sell a product</a>
                                <?php endif; ?>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                           
                        <?php endif; ?>
                    </ul>
                    </div>
          </div>
        </div>
      </nav>
      <!-- Searchbar
<section class="search-bar">
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 mx-auto">
                      <form action="/searchProduct" method="POST" role="search">
                          <div class="p-1 bg-light shadow-sm">
                              <div class="input-group">
                              <?php echo csrf_field(); ?>
                                  <input type="search" placeholder="Search for a products" name="search" class="form-control" aria-label="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
                                  </div>
                              </div>
                          </div>
                      </form>

                  </div>
              </div>
          </div>

      </section> -->
</div>

    
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\Agriculture_Online_platform(AgroPal)\resources\views/layouts/app.blade.php ENDPATH**/ ?>