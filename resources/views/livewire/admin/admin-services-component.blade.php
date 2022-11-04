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
                    <h1>Services</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Services</li>
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
                                                All Services
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{route('admin.addService')}}" class="btn btn-info pull-right">Add New</a>
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
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Featured</th>
                                                <th>Category</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($services as $service)
                                            <tr>
                                                <td>{{$service->id}}</td>
                                                <td>
                                                    <img src="{{asset('images/services/thumbnails')}}/{{$service->thumbnail}}" width="100" alt="">
                                                </td>
                                                <td>{{$service->name}}</td>
                                                <td>{{$service->price}}</td>
                                                <td>
                                                    @if($service->status)
                                                        Active
                                                    @else
                                                        Inactive
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($service->featured)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                                <td>{{$service->category->name}}</td>
                                                <td>{{$service->created_at}}</td>
                                                <td>
                                                    <a href="{{route('admin.editService', ['service_slug'=>$service->slug])}}">
                                                        <i class="fa fa-edit fa-2x text-info"></i>
                                                    </a>

                                                    <a href="" onclick="return confirm('Are you sure you want to delete service?') || event.stopImmediatePropagation()" wire:click.prevent="deleteService('{{$service->id}}')" style="margin-left:10px;">
                                                        <i class="fa fa-times fa-2x text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$services->links()}}
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
