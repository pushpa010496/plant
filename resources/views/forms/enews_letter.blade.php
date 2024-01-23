@extends('../layouts/pages')
@section('style')

@endsection
@section('content')
 
<!-- // Content -->
    <div class="container pt-3"> 
    
    <iframe id="form-iframe" src="<?php echo config('app.url'); ?>/e-newsletters/<?php echo @$enews_letter->file; ?>"  width="100%" height="2400" style="border: 0px;"></iframe> 
     
    </div><!-- Container // -->

@endsection

