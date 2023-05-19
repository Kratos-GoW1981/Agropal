<?php $__env->startSection('content'); ?>
<br><br><br><br><br>

<div class="container">
<hr>
   <center> <h1 class="text-center">The Added products are:</h1></center>
        <hr>
        </div>
<p>
        <table class="table table-dark table-hover">
    <tr>
      <th scope="col"></th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Available quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Categories</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>

  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
      <th scope="row"><img src="/storage/<?php echo e($product->image); ?>" style="height:10px; weight 10px;"></th>
      <td><?php echo e($product->name); ?></td>
      <td><?php echo e($product->quantity); ?></td>
      <td><?php echo e($product->price); ?></td>
      <td> <?php echo e($product->description); ?></td>
      <td>Will be updated soon </td>
</td>
      <td><form action="/editProduct" method="POST">
<?php echo csrf_field(); ?>
<input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">

<button id="signup">Edit</button>
</form>
</td>
<td><form action="/deleteProduct" method="POST">
<?php echo csrf_field(); ?>
<input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">

<button id="login">Delete</button>
</form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Agriculture_Online_platform(AgroPal)\resources\views/viewaddedproducts.blade.php ENDPATH**/ ?>