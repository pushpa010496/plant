
<?php $__env->startSection('style'); ?>
 <style type="text/css">
  .event-bg {
    background-image: url("<?php echo e(config('app.url')); ?>img/events/event-list/event-listing-bg.jpg");
  }
 </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

 <!-- Begin page content -->
    <div role="main" id="company-profile">
<!-- 
      <div class="container">
        <div class="text-center pt-2">
          <h2 class="main-title"><span>Partners</span></h2>
        </div>
      </div> -->

    <!--  <div class="container-fluid pl-0 pr-0">
        <div class="event-bg">
          <h1 class="text-center text-uppercase">Partners</h1>
        </div>
      </div> -->

      <!-- // Event Listing -->
      <div class="container pt-2 pb-3">
        <div class="row">   
          <div class="col-lg-9 mt-4">
            <div class="row">          
              <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>               
                <div class="col-lg-3 mb-4">
                  <div class="div-shadow">
                    <img class="img-fluid" src="<?php echo e(config('app.url')); ?>event/partner/<?php echo e($partner->image); ?>" alt="<?php echo e($partner->img_alt); ?>"/>
                  </div>                  
                 </div> 
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  
            </div>
         </div>
       <div class="col-lg-3 mt-4 pb-3">
        
             <form name="vtiger_form" method="post" id="form_count">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <input type="hidden" name="publicid" value="50e431570883ed0d8c4871b739d7aa46">
              <input type="hidden" name="name" value="plantautomation-event-register"> 
              <input type="hidden" name="cf_leads_page" value="event_partner">
            <?php echo $__env->make('events._eventRegisterForm2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
          </form>
        </div>         
        </div>
      </div>
      <!-- Event Listing // -->
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <?php if(session('message_type') == 'success'): ?>    
          <script type="text/javascript">         
         var url = window.location.href.toString().split(window.location.host)[1];
            window.history.pushState("object or string", "Title",url+"/partnership-enquiry-success");
              $('#myModal1').modal('show');         
         </script>
  <?php endif; ?>  


  
  
  
 
  
  <!-- <script src="assets/js/jquery-1.11.1.min.js"></script>  -->
  <script src="<?php echo e(asset('industry/js/multiselect.js')); ?>"></script>
  <script>
    $(document).ready(function() {
      $('#example-getting-started').multiselect();
    });
  </script>

   <script type="text/javascript">
      var url = "<?php echo e(url('company-enquiry')); ?>";
      function OnButton1(){
         document.vtiger_form.action = url;
        document.vtiger_form.submit();
            
        setTimeout(function(){
           document.vtiger_form.action ="https://ochremediapvtltd1.od2.vtiger.com/modules/Webforms/capture.php";
        
          document.vtiger_form.submit(); 
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
<?php echo $__env->make('../layouts/event', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/events/partners.blade.php ENDPATH**/ ?>