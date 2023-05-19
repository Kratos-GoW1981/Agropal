<?php $__env->startSection('content'); ?>
<br><br><br><br><br><br><br><br><br>
      <!-- Searchbar -->
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

      </section>
<div class="container">
    <h1 class="text-center">The search reasult of the products are:</h1>
        <hr>
        </div>


<div>
<?php if(isset($products)): ?>
<!-- <p>the search results for your query</p><?php echo e($q); ?>

</b>are </b>
product details  -->
<br><br><br><br><br><br><br><br><br>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="product">
     <div class="imgbox"> 
         <img src="/storage/<?php echo e($product->image); ?>"> </div>
     <div class="specifies">
         <h2><?php echo e($product->name); ?><br> <span>Categories</span></h2>
         <div class="price">Rs. <?php echo e($product->price); ?></div> 
         <br>
         <div class="buttons d-flex justify-content-center"> 
         <a href="/productdetails/<?php echo e($product->id); ?>" class="buy_now btn-success">see more</a>
</div>
         </div>
 </div>
 <br>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php else: ?> 
<br><br><br><br>
<h1 class="text-center">Sorry! The product which you have searched is not available on our platform.</h1>
<?php endif; ?>


</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Agriculture_Online_platform(AgroPal)\resources\views/search.blade.php ENDPATH**/ ?>