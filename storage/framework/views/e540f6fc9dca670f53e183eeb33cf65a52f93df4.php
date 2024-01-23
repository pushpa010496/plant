
<?php $__env->startSection('style'); ?>
 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- // Profile Body -->

      <div class="container pt-4 pb-3">
        <div class="row">
          
          
           <div class="col-lg-9">
            <div class="row">    
            <?php $__currentLoopData = $speakers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>          
               <div class="col-lg-4 text-center mb-4">
                <div class="border border-secondary div-shadow p-3 min-height-240">
                  <img class="img-fluid rounded-circle mb-2" src="<?php echo e(config('app.url')); ?>event/speaker/<?php echo e($cp->image); ?>" alt="" width="120">
                  <h3 class="display-6 text-blue"><?php echo e($cp->name); ?></h3>
                  <p class="card-text"><small><?php echo e($cp->designation); ?></small></p>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div>
          </div>
            
          <div class="col-lg-3 pb-3">
            
             <form name="speakers_form" method="post" id="form_count">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="publicid" value="50e431570883ed0d8c4871b739d7aa46">
                <input type="hidden" name="name" value="plantautomation-event-register">
              <input type="hidden" name="cf_leads_page" value="event-speaker">
            <?php echo $__env->make('events._eventRegisterForm2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
          </form>
          </div>
        </div>
      </div>  
      <!-- Profile Body // -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <?php if(session('message_type') == 'success'): ?>    
          <script type="text/javascript">         
         var url = window.location.href.toString().split(window.location.host)[1];
            window.history.pushState("object or string", "Title",url+"/speaker-enquiry-success");
              $('#myModal1').modal('show');         
         </script>
  <?php endif; ?>  
   <script type="text/javascript">
      var url = "<?php echo e(url('company-enquiry')); ?>";
      function OnButton1(){
         document.speakers_form.action = url;
        document.speakers_form.submit();
            
        setTimeout(function(){
           document.speakers_form.action ="https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
        
          document.speakers_form.submit(); 
          /*
          $('.product_form').prop('action',url);
           $('.product_form').submit(function(){return true;});*/
          
        },200);
      }
      function checkform() {  

       var flag = true;
       var form = $('#form_count');
       if(form.find('select').val() == ''){
         $('#alertModal').modal('show');  
         return false;
       }    
       if(grecaptcha.getResponse() == ""){
        
        form.find('.verifi').html("We can't proceed request with out captcha verification!");

        $('#alertModal').modal('show');  
        return false;
      }   
       $("#form_count input").each(function(){

        if($(this)[0].hasAttribute("required")){

          if($(this)[0].value == ""){
            $('#alertModal').modal('show');                 
            
            flag = false;
          }
        }
      });
       if (!flag) { return false; }
       OnButton1();
       return true
       
     }

     
  </script>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/event', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/events/speakers.blade.php ENDPATH**/ ?>