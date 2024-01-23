<?php $__env->startSection('style'); ?>

<style>

.card-header h2 {font-size: 12px !important;} /* For Main Nav */

.filter > ul{margin-left: -30px;}

.filter > ul li{list-style: none;float:left;margin-right: 7px;color: #92278f;margin-bottom: 10px; width: 20px;height: 20px;border:1px solid #92278f; text-align: center;vertical-align: middle;}

.filter > ul li a{color: #92278f;font-size: 14px;background-color: transparent;display: block;line-height: 18px;}

.filter > ul li a:hover{color: #fff;}

.filter > ul li:hover{ background-color: rgba(145, 37, 142, 0.8);color: #fff; }

.filter > ul li a:active {background-color: #92278f;color: #fff;}



.breadcrumb{background-color: transparent;padding: 5px 0;margin-bottom: 5px;font-size: 14px;} 



.breadcrumb-item + .breadcrumb-item::before {

  display: inline-block;

  padding-right: .5rem;

  padding-left: .5rem;

  color: #6c757d;

  content: "\f101";

  font-family: fontawesome;

}

.suppliers a{color: #333;}

.suppliers a:hover{color: #91258E;}

.pagination{border-radius: 0px;}

.page-link {    

  color: #222;

  background-color: #e4e4e4;

  border: 1px solid #d5d5d5;

  margin-right: 7px;

}

.page-link:hover {

  color: #fff;

  text-decoration: none;

  background-color: rgba(145, 37, 142, 0.8);

  border-color: #91258E;

}

.page-item.active .page-link {

  z-index: 1;

  color: #fff;

  background-color: #91258E;

  border-color: #91258E;

}

.page-item:last-child .page-link, .page-item:first-child .page-link{border-radius: 0px;}

.suppliers h3{

  width: 100%;

  white-space: nowrap;

  overflow: hidden;

  text-overflow: ellipsis;

}

.filter .active{

  background-color: #92278f;

  color:#ffffff;

}

.carousel-indicators {

  right: 10px;

  left: auto;

  margin-right: 7%;

  bottom: 0px;

}



.carousel-indicators li{

  height:8px;

  width:8px;

  background: #e2e2e2;

  border-radius: 50%;

}

.carousel-indicators .active{

  background: transparent;

  border:1px solid #e2e2e2;



}





.country_click{

  display: none;

}

.country_div{

  max-height:170px;

  overflow: hidden;

}



</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin page content -->
<div role="main">
  <div class="pt-2 pb-2 d-none d-sm-block"></div>
  <!-- // Event Listing -->
  <div class="container pb-3">
    <div class="row">        
      <div class="col-lg-8 pt-5"> 
        <div class="row">
          <?php if(@$data[0] != 'nocategory'): ?>
          <div class="col-lg-12 bg-light border border-secondary">
            <h1 class="display-5 mb-3 pt-3 " style="text-transform: capitalize"> <strong><?php echo e(strtolower ($category->name)); ?> Suppliers in <?php echo e($country); ?> </strong></h1>
            <?php if(count($data) != 0): ?>

            <div class="suppliers mt-2 mb-4">



              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



              





              



              <h3 class="display-6 mb-3"><a href="<?php echo e(url('suppliers').'/'. @$product->company->companyprofile[0]->url); ?>"><?php echo e($product->company->comp_name); ?></a> 



              </h3>



              

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





            </div>

            <?php else: ?>

            <h2 class="display-5 mb-3 pt-3">No Records found</h2>

            <?php endif; ?>  



          </div>

          <?php else: ?>

          



          <div class="col-lg-12 bg-light border border-secondary">



           <h2 class="display-5 mb-3 pt-3">Category not match</h2>



         </div>

         <?php endif; ?>



       </div>

     </div>

     

     <div class="col-lg-4 pt-5">

       <div class="border border-secondary div-shadow p-4">

        <div class="">

          <h3 class="display-5 font-weight-bold">Search by Country</h3>  

          <div class="country_div div_height">

            <?php $__currentLoopData = $country_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a href="<?php echo e(route('category-country',[$country['category_url'],str_slug($country['name'])])); ?>"><?php echo e($country['name']); ?></a> (<?php echo e($country['count']); ?>)<br>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   

          </div>  

          <span class="float-right country_click">

            <a href="javascript:void(0)"><i class="fa fa-plus-circle" aria-hidden="true"></i> More</a>

          </span>  



        </div>

      </div>

    </div>

  </div>

</div>

</div>

<!-- Event Listing // -->

</div>





<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">



 var country_height = $('.country_div').height(); 

 if(country_height >=  170){

  $('.country_click').css('display','block');

}



$('.country_click').on('click',function(){

  $('.country_div').css({"max-height":"inherit","overflow":"auto"}); 

  setTimeout(function(){

    $('.country_click').addClass('country_less').removeClass('country_click');

    $('.country_less').find('a').empty();

    $('.country_less').find('a').append('<i class="fa fa-minus-circle" aria-hidden="true"></i> Less');

  },10);

});



$('body').on("click",'.country_less', function() {

  

  $('.country_div').css({"max-height":"170px","overflow":"hidden"});   

  setTimeout(function(){

    $('.country_less').addClass('country_click').removeClass('country_less');

    $('.country_click').find('a').empty();

    $('.country_click').find('a').append('<i class="fa fa-plus-circle" aria-hidden="true"></i> More');

  },10);

});

</script>

<?php if(session('message_type') == 'success'): ?>    

<script type="text/javascript">         



  // history.pushState(null, null, '/products/'+company+'/'+product+'/enquiry-success');

  $('#myModal2').modal('show');

</script>

<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('../layouts/pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/plantautomationt/public_html/resources/views/search/category_search.blade.php ENDPATH**/ ?>