@extends('../layouts/pages')
@section('style')
@endsection
@section('content')
	<div class="offset-md-3 col-md-6 offset-md-3 pt-4" align="center">
		  <br/>  <br/>
        <h4>Thank You...</h4>
         <br/>
      <p class="alert alert-info" style="font-size: 16px;margin-top: 20px;">For any further queries or issue resolution reach us at<strong> +91 40 4961 4567</strong> or
email us at <strong>info@plantautomation-technology.com</strong>. And our support staff will get back to you at the earliest.</p>
	</div>
    <br/>  <br/>
  		   <a id="filedownload" download style="display: none" href="{{url('/')}}/industry/mediapack/Plant-Media-Pack.pdf">download</a>
@endsection
@section('scripts')
  <script type="text/javascript">
   for (let link of document.querySelectorAll('a[download]'))
       link.click();
</script>
  		
@endsection