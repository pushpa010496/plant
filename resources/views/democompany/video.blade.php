@extends('democompany/layout/company')

@section('style')



@endsection

@section('content')

 <!-- // Profile Body -->

      {!! Form::open(['url' => 'company-enquiry']) !!}

      <div class="container pt-4 pb-3">

        <div class="row">

          <div class="col-lg-9 mb-3">

            <div class="row">  

            @foreach($videos as $video)

                <div class="col-lg-4 mb-4 video">

                

                    

                      <video controls="" title="{{ $video->title }}" width="100%" allowfullscreen >

                      <source src="{{config('app.url').'suppliers/'.str_slug($video->company->comp_name).'/video/'.$video->video}}" type="video/mp4">

                       

                      </source>

                    </video>

                 

                  </div>

            @endforeach



           {{--    @foreach($companyprofile as $cp)

                @foreach($cp->pvideo as $value)             

                  <div class="col-lg-4 mb-4 video">

                  @if(@$value->video)

                    

                      <video controls="" width="100%" allowfullscreen >

                      <source src="{{config('app.url').'suppliers/'.str_slug($cp->company->comp_name).'/video/'.$value->video}}" type="video/mp4">

                        

                      </source>

                    </video>

                    @endif

                  </div>

                @endforeach  

              @endforeach   --}}

             </div> 

          </div>



          <div class="col-lg-3 pb-3">

            @include('company.productEnqirypage_all')

          </div>

        </div>

      </div>  
    </div>

@endsection

@section('scripts')

<script type="text/javascript">

var figure = $(".video").hover( hoverVideo, hideVideo );



function hoverVideo(e) {  

    $('video', this).get(0).play(); 

}



function hideVideo(e) {

    $('video', this).get(0).pause(); 

}

</script>

  @if(session('message_type') == 'success')    

          <script type="text/javascript">         

         var company = '{{ @$cp->url }}';

    history.pushState(null, null, '/video/'+company+'/enquiry-success');

              $('#myModal1').modal('show');         

         </script>

  @endif   

@endsection