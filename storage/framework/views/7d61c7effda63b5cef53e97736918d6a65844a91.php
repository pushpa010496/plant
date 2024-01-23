
<?php $__env->startSection('style'); ?>
 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- // Profile Body -->

      <div class="container pt-4 pb-3">
        <div class="row">
            <div class="col-lg-9">           
              <?php $__currentLoopData = $eventprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $cp->eventprofile->exhibitor_description; ?>

                <input type="hidden" name="event_name_display" value="<?php echo e($cp->name); ?>">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
            </div>
            
          <div class="col-lg-3 pb-3">
            
            <form name="exhibitors_form"  method="post" id="form_count">
             <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <input type="hidden" name="publicid" value="50e431570883ed0d8c4871b739d7aa46">
              <input type="hidden" name="name" value="plantautomation-event-register">
              <input type="hidden" name="cf_leads_page" value="event-exhibitors">
             <?php echo $__env->make('events._eventRegisterForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
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
            window.history.pushState("object or string", "Title",url+"/exhibitor-signup-success");
              $('#myModal1').modal('show');         
         </script>
  <?php endif; ?>
     <script type="text/javascript">
      var url = "<?php echo e(url('company-enquiry')); ?>";
      function OnButton1(){
         document.exhibitors_form.action = url;
        document.exhibitors_form.submit();
            
        setTimeout(function(){
           document.exhibitors_form.action ="https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
        
          document.exhibitors_form.submit(); 
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


<?php echo $__env->make('../layouts/event', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/events/exhibitors.blade.php ENDPATH**/ ?>