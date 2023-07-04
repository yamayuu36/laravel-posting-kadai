
 
 <?php $__env->startSection('title', '新規投稿'); ?>
 
 <?php $__env->startSection('content'); ?> 
     <?php if($errors->any()): ?>
         <div class="alert alert-danger">
             <ul>
                 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li><?php echo e($error); ?></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </ul>
         </div>
     <?php endif; ?>
     
     <div class="mb-2">    
         <a href="<?php echo e(route('posts.index')); ?>" class="text-decoration-none">&lt; 戻る</a>                                
     </div>
     
     <form action="<?php echo e(route('posts.store')); ?>" method="post">
         <?php echo csrf_field(); ?>
         <div class="form-group mb-3">
             <label for="title">タイトル</label>                        
             <input type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>">
         </div>
         <div class="form-group mb-3">
             <label for="content">本文</label>                        
             <textarea class="form-control" name="content"><?php echo e(old('content')); ?></textarea>
         </div>
         <button type="submit" class="btn btn-outline-primary">投稿</button>
     </form>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-posting-app\resources\views/posts/create.blade.php ENDPATH**/ ?>