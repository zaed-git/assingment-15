<!-- contact section start -->
<div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">A Call Back</h1>
               <form action="/sendmail" method="POST">
               <?php echo csrf_field(); ?>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="name" value="<?php echo e(old('name')); ?>">
                  
                  <!--  -->
                  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <!--  -->
                    </div>
                  
            <!--  -->
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>">
                  <!--  -->
                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <!--  -->
                  
                    </div>
                  
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message">

                     <?php echo e(old('message')); ?>

                     </textarea>
                     <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Send Message</button>
               </form>
               <?php if($message = Session::get('success')): ?>
        

                        <h3>  <?php echo e($message); ?></h3>
                <?php endif; ?>
               <!-- <div class="send_btn"><a href="#">SEND</a></div> -->
            </div>
         </div>
      </div>
      <!-- contact section end --><?php /**PATH C:\xamppeighttwo\htdocs\laravel\ass-module-15\resources\views/component/contactmain.blade.php ENDPATH**/ ?>