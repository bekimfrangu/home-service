<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Profile</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
     </div>

        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-8 col-md-offset-2 profile1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-6">
                                                    Profile
                                            </div>
                                            <div class="col-md-6">
                                             
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                @if($sprovider->image)
                                                        <img src="{{asset('images/sproviders')}}/{{$sprovider->image}}" width="100%" alt="">
                                                    @else   
                                                      <img src="{{asset('images/sproviders/profile.jpg')}}" width="100%" alt="">
                                                @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <h3>Name: {{Auth::user()->name}}</h3>
                                                    <p>About: {{$sprovider->about}}</p>
                                                    <p><b>Email: {{Auth::user()->email}}</b></p>
                                                    <p><b>Phone: {{Auth::user()->phone}}</b></p>
                                                    <p><b>City: {{$sprovider->city}}</b></p>
                                                    <p><b>Service Category: 
                                                    @if($sprovider->service_category_id)
                                                        {{$sprovider->category->name}}</b></p>
                                                    @endif
                                                    <p><b>Service Location: {{$sprovider->service_locations}}</b></p>

                                                    <a href="{{route('sprovider.editProfile')}}" class="btn btn-info pull-right">Edit Profile</a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
</div>


