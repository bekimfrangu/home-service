<div>
    <style>
        nav svg {
            height: 20px;
        }
        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Service Providers</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Service Providers</li>
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
                            <div class="col-md-12 profile1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-6">
                                                All Service Providers
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                             <div class="panel-body">
                             @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message')}}
                                </div>
                             @endif
                                <table class="table table-striped">
                                        <thead>
                                            <tr>
                                        
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>City</th>
                                                <th>Service Category</th>
                                                <th>Service Location</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sproviders as $sprovider)
                                            <tr>
                                        
                                                <td>
                                                    <img src="{{asset('images/sproviders')}}/{{$sprovider->image}}" height="60" alt="">
                                                </td>
                                                <td>{{$sprovider->user->name}}</td>
                                                <td>{{$sprovider->user->email}}</td>
                                                <td>{{$sprovider->user->phone}}</td>
                                                <td>{{$sprovider->city}}</td>
                                                <td>{{$sprovider->category->name}}</td>
                                                <td>{{$sprovider->service_locations}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$sproviders->links()}}
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
