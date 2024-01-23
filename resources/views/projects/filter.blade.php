@foreach ($projects as $project)
    <div class="col-lg-4 mb-4">
      <div class="projects-list projects-disc div-shadow">
        <a href="{{url('projects/'.$project->  project_url)}}"><img class="img-fluid" src="{{config('app.url')}}project/{{$project->image}}" alt="{{$project->img_alt}}"/></a>
        <div class="overlay">
          <div class="text text-white">   
            <h2 class="pb-1"><a href="{{url('projects/'.$project->  project_url)}}">{{$project->company}}</a></h2>
            <p class="display-6"><i class="fa fa-map-marker fa-lg mr-1 text-muted" aria-hidden="true"></i> {{$project->location}}</p>
            <p class="display-6 text-warning font-weight-bold"><small>Project Cost :</small> {{$project->cost}}</p>                           
          </div>
        </div>
      </div>
    </div>
@endforeach