@extends('../layouts/pages')
@section('style')
<style type="text/css">
    .mt-120{
        margin-top: 120px;
    }
</style>
@endsection
@section('content')
	<div class="offset-md-3 col-md-6 offset-md-3 mt-120" align="center">		
        @if(session('message'))
            <div class="alert alert-{{ session('message_type') }} alert-dismissible" id="success-alert" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{@session('message')}}
            </div>
        @endif
      <p class="alert alert-info" style="font-size: 16px;margin-top: 20px;">For any further queries or issue resolution reach us at<strong> +91 40 4961 4567</strong> or
email us at <strong>info@plantautomation-technology.com</strong>. And our support staff will get back to you at the earliest.</p>
	</div>
  		
@endsection