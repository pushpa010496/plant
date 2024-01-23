 <div class="col-lg-12 mb-4">
  <div class="row" id="tenders-list">
    @foreach ($tenders as $tender)
    <div class="col-lg-12 mb-4">
      <div class="div-shadow p-3">  
        <div class="row">                
          <div class="col-lg-3">
            <p class="font-weight-bold">Title:</p>
          </div>
          <div class="col-lg-9">
            <p>{{$tender->title}}</p>
            
          </div> 
          <div class="col-lg-3"><p class="font-weight-bold">Country:</p></div>
          <div class="col-lg-9"><p>{{$tender->country->country_name}}</p></div> 

          <div class="col-lg-3">
            <p class="font-weight-bold">Tender Reference:</p>
          </div>
          <div class="col-lg-9">{{$tender->tender_reference}} </div>
          <div class="col-lg-3">
            <p class="font-weight-bold">Published Date:</p>
          </div>
          <div class="col-lg-9">
            <h3 class="display-6">{{date('d M Y',strtotime($tender->issue_date))}}</h3>
            
          </div>

          <div class="col-lg-3">
            <p class="font-weight-bold">Action Deadline:</p>
          </div>
          <div class="col-lg-9">
            <h3 class="display-6">{{ date('j F Y', strtotime($tender->action_deadline)) }}</h3>
          </div>

          <div class="col-lg-3">
            <p class="font-weight-bold">Short Description:</p>
          </div>
          <div class="col-lg-9">
            <h3 class="display-6">{{$tender->home_description}}</h3>
          </div>

          


          <div class="col-lg-3">
            <p class="font-weight-bold mb-0">View Tender Details:</p>
          </div>
          <div class="col-lg-9">
            <h3 class="display-6 mb-0">
                            <!--  @if (Auth::guest())
                            <a href="#" target="_blank" class="text-blue" data-toggle="modal" data-target="#exampleModalCenter{{$tender->id}}">View Details</a>
                            @else
                             
                            @endif -->
                            <a href="{{url('/tenders/'.$tender->tender_url)}}" class="text-blue" >View Details</a>
                          </h3>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="exampleModalCenter{{$tender->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content text-center p-3">
                          <div class="modal-header">
                            <h4 class="modal-title display-6 text-center" id="exampleModalLongTitle">Energy, Power &amp; Electrical Tenders, Proposals, Projects and Bids.</h4>                        
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form">
                              
                              <ul class="tab-group">
                                <li class="tab active"><a href="#signup">Sign Up</a></li>
                                <li class="tab"><a href="#login">Log In</a></li>
                              </ul>
                              
                              <div class="tab-content">
                                <div id="signup">   
                                  <h3 class="display-5 pb-2">Sign Up for Free</h3>
                                  
                                  <form method="POST" action="{{ route('registers') }}">
                                    {{ csrf_field() }}
                                    <div class="">
                                      <div class="field-wrap">
                                        <label>
                                          First Name<span class="req">*</span>
                                        </label>
                                        <input type="text" name="name" required autocomplete="off" />
                                      </div>    

                                      <div class="field-wrap">
                                        <label>
                                          Email Address<span class="req">*</span>
                                        </label>
                                        <input name="email"  type="email"required autocomplete="off"/>
                                      </div>
                                      
                                      <div class="field-wrap">
                                        <label>
                                          Set A Password<span class="req">*</span>
                                        </label>
                                        <input name="password" type="password"required autocomplete="off"/>
                                      </div>
                                      <div class="field-wrap">
                                        <label>
                                          Confirm Password<span class="req">*</span>
                                        </label>
                                        <input name="password_confirmation" type="password" required autocomplete="off"/>
                                      </div>
                                    </div>
                                    <input name="slug" type="hidden" value="{{url('/tenders/'.$tender->tender_url)}}" />
                                    
                                    <button type="submit" class="button button-block"/>Get Started</button>
                                    
                                  </form>

                                </div>
                                
                                <div id="login">   
                                  <h3 class="display-5 pb-2">Welcome Back!</h3>
                                  
                                  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="field-wrap{{ $errors->has('email') ? ' has-error' : '' }}">
                                      <label>
                                        Email Address<span class="req">*</span>
                                      </label>
                                      <input name="email" value="{{ old('email') }}" autofocus  type="email"required autocomplete="off"/>
                                      @if ($errors->has('email'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                      @endif
                                    </div>
                                    
                                    <div class="field-wrap{{ $errors->has('password') ? ' has-error' : '' }}">
                                      <label>
                                        Set A Password<span class="req">*</span>
                                      </label>
                                      <input name="password" type="password"required autocomplete="off"/>
                                      @if ($errors->has('password'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                      @endif
                                    </div>
                                    <input name="slug" type="hidden" value="{{url('/tenders/'.$tender->tender_url)}}" />
                                    <button type="submit" class="button button-block">Login</button>
                                    
                                  </form>

                                </div>
                                
                              </div><!-- tab-content -->
                              
                            </div> <!-- /form -->
                            
                          </div>

                          <div class="text-center text-muted pb-3">
                            <small>                     
                              <a href="{{ route('password.request') }}" target="_blank" class="text-muted">Forgot Password</a>
                            </small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Popup // -->
                  </div>  
                  @endforeach
                  
                </div>        
              </div>

            </div>
          </div>
          <style type="text/css">          
            #exampleModalCenter label {
              position: absolute;
              -webkit-transform: translateY(6px);
              transform: translateY(6px);
              left: 13px;
              color: rgba(170, 170, 170, 0.5);
              -webkit-transition: all 0.25s ease;
              transition: all 0.25s ease;
              -webkit-backface-visibility: hidden;
              pointer-events: none;
              font-size: 16px;
            }

            #exampleModalCenter label .req {
              margin: 2px;
              color: #fff;
            }

            #exampleModalCenter label.active {
              -webkit-transform: translateY(40px);
              transform: translateY(40px);
              left: 2px;
              font-size: 14px;
            }
            #exampleModalCenter label.active .req {
              opacity: 0;
            }

            #exampleModalCenter label.highlight {
              color: #fff;
            }

            #exampleModalCenter input, textarea {
              font-size: 16px;
              display: block;
              width: 100%;
              height: 40px;
              padding: 5px 10px;
              background: none;
              background-image: none;
              border: 1px solid #a0b3b0;
              color: #fff;
              border-radius: 0;
              -webkit-transition: border-color .25s ease, -webkit-box-shadow .25s ease;
              transition: border-color .25s ease, -webkit-box-shadow .25s ease;
              transition: border-color .25s ease, box-shadow .25s ease;
              transition: border-color .25s ease, box-shadow .25s ease, -webkit-box-shadow .25s ease;
            }
            #exampleModalCenter input:focus, textarea:focus {
              outline: 0;
              border-color: #1c83c1;
            }

            #exampleModalCenter textarea {
              border: 2px solid #a0b3b0;
              resize: vertical;
            }
          </style>
