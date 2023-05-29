<!-- contact section start -->
<div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">Registration Section</h1>
               <form action="/register " method="POST">
               <?php echo csrf_field(); ?>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="name" value="<?php echo e(old('name')); ?>">
                  
                  <!--  -->
                  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <h2 class="text-danger"><?php echo e($message); ?></h2>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <!--  -->
                    </div>
                  
            <!--  -->
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="email" name="email" value="<?php echo e(old('email')); ?>">
                  <!--  -->
                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <h2 class="text-danger"><?php echo e($message); ?></h2>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <!--  -->
                  
                    </div>
                  
                  <<div class="form-group">
                     <input type="password" class="email-bt" placeholder="password" name="pass" value="<?php echo e(old('pass')); ?>">
                  <!--  -->
                  <?php $__errorArgs = ['pass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <h2 class="text-danger"><?php echo e($message); ?></h2>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <!--  -->
                  
                    </div>
                  <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
               </form>
               <?php if($message = Session::get('success')): ?>
        

                        <h3>  <?php echo e($message); ?></h3>
                <?php endif; ?>
               <!-- <div class="send_btn"><a href="#">SEND</a></div> -->
            </div>
         </div>
      </div>
      <!-- contact section end --><?php /**PATH C:\xamppeighttwo\htdocs\laravel\ass-os-module-15\resources\views/component/signupmain.blade.php ENDPATH**/ ?>