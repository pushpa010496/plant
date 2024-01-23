<style>
  .alert-warning{
    padding: 0px;
    background-color: #f03e3e;
    text-align: center;
    color: #fff;
    border:0px;
    border-radius: 0px;
    font-size: 18px;
    font-family: Century Gothic;
  }
  .close{line-height: 14px;}
  .alert .btn-warning {
    font-size: 16px;
    color: #222;
    background-color: #fffe65;
    border-color: #fffe65;
    border-radius: 15px;
  }
  .dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0 !important;
}
.dropleft .dropdown-menu {
    top: 0;
    left: auto;
    right: 100%;
    margin-top: 0;
    margin-right: 0 !important;
}
#main-nav {
    box-shadow: 0 !important;
}
.navbar-nav li {
    
    font-size: 14px !important;
}
</style>
   <!-- Leader Board Banner -->
   <div class="mt-3"></div>
  <div class="container">
       </div>
    <!-- Leader Board Banner end -->
<div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-5 col-12 pt-1 pb-1">
          <a href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(config('app.url')); ?>img/main-logo.png" class="PF-MT5 PF-MB5" title="<?php echo e(trans('messages.sitename')); ?>" alt="<?php echo e(trans('messages.sitename')); ?>">
          </a>
        </div>
        <div class="col-lg-4 offset-lg-5 col-md-5 offset-md-2 col-sm-5 col-9 pt-1 mb-2 align-self-center float-right">  
          <span class="pt-2 d-none d-sm-block"></span>
         <form method="get" action="<?php echo e(url('/search-result')); ?>">
          <div class="input-group col-md-12" id="">
            <input type="text" name="q" class="form-control input-md" required placeholder="Enter Keywords...">
            <span class="input-group-btn" >
              <button class="btn btn-secondary" type="submit" style="background-color:#92278f;">
                <i class="fa fa-search" aria-hidden="true" ></i></button>
              </span>
            </div>
            <?php echo e(Form::close()); ?> 
        </div>  
        <div class="col-lg-2 col-md-2 col-sm-2 col-3 pt-1 pb-1 align-self-center navbar-expand-lg">
          <button class="navbar-toggler border bg-light" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon pt-1"><i class="fa fa-bars" aria-hidden="true"></i></span>
          </button> 
        </div>
      </div>
    </div>
<header>


   <div class="container d-fluid ">
      <nav class="navbar navbar-expand-lg navbar-light border-top border-bottom " >
      <div class="collapse navbar-collapse justify-content-lg-center" id="main-navbar" >
        <ul class="navbar-nav">
          <li class="nav-item <?php echo e((request()->is('/')) ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('/')); ?>">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php echo e((request()->is('categories*')) ? 'active' : ''); ?>">
            <a class="nav-link " href="<?php echo e(url('/categories')); ?>" >CATEGORIES</a>
          </li>
          <li class="nav-item <?php echo e((request()->is('products*')) ? 'active' : ''); ?>">
            <a class="nav-link " href="<?php echo e(url('/products')); ?>" >PRODUCTS</a>
          </li>
          <li class="nav-item <?php echo e((request()->is('suppliers*')) ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('/suppliers')); ?>"> SUPPLIERS</a>
          </li>
          <li class="nav-item <?php echo e((request()->is('events*')) ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('/events')); ?>"> EVENTS</a>
          </li>
          <li class="nav-item <?php echo e((request()->is('webinars*')) ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('/webinars')); ?>">WEBINARS </a>
          </li>
          <li class="nav-item <?php echo e((request()->is('tenders*')) ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('/tenders')); ?>">TENDERS</a>
          </li>
          <li class="nav-item <?php echo e((request()->is('articles*')) ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('/articles')); ?>">ARTICLES</a>
          </li>
          <li class="nav-item <?php echo e((request()->is('our-services')) ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('/our-services')); ?>"> ADVERTISE</a>
          </li>
          <li class="nav-item <?php echo e(( request()->is('news*') || request()->is('pressreleases*') || request()->is('interviews*') || request()->is('projects*') || request()->is('whitepapers*') ) ? 'active' : ''); ?> dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo e(url('/industryupdates')); ?>" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INDUSTRY UPDATE</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="<?php echo e(url('/news')); ?>">NEWS</a>
                <a class="dropdown-item" href="<?php echo e(url('/pressreleases')); ?>">PRESS RELEASES</a>
                <a class="dropdown-item" href="<?php echo e(url('/interviews')); ?>">INTERVIEWS</a>
                <a class="dropdown-item" href="<?php echo e(url('/projects')); ?>">PROJECTS</a>
                <a class="dropdown-item" href="<?php echo e(url('/whitepapers')); ?>">WHITE PAPERS</a>
              </div>
          </li>
                </div>
              </div>
          </li>
        </ul>
      </div>
    </nav> 
    </div>
</header><?php /**PATH /home/plantautomationt/public_html/resources/views/layouts/_header.blade.php ENDPATH**/ ?>