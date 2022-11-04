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
                                                <a href="{{route('sprovider.profile')}}" class="btn btn-info pull-right">Go back</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    @if(Session::has('message'))
                                                        <div class="alert alert-success" role="alert">
                                                            {{Session::get('message')}}
                                                        </div>
                                                    @endif

                                                    <form class="form-horizontal" wire:submit.prevent = "updateProfile">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="newImage" class="control-label col-md-3">Profile Image: </label>
                                                           
                                                            <div class="col-md-9">
                                                            <input type="file" name="newImage" class="form-control-file" wire:model="newImage">
                                                                @if($newImage)
                                                                        <img src="{{$newImage->temporaryUrl()}}" width="220" alt="">
                                                                @elseif($image)
                                                                        <img src="{{asset('images/sproviders')}}/{{$image}}" width="220" alt="">
                                                                @else
                                                                        <img src="{{asset('images/sproviders/profile.jpg')}}" width="220" alt="">
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="about" class="control-label col-md-3">About: </label>
                                                            <div class="col-md-9">
                                                                <textarea name="about" id="about"  class="form-control"  class="form-control" wire:model="about"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="service_category_id" class="control-label col-md-3">Service Category: </label>
                                                         <div class="col-md-9">
                                                            <select name="service_category_id" id="service_category_id" class="form-control" wire:model="service_category_id">
                                                            @foreach($scategories as $scategory)
                                                                    <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                                            @endforeach
                                                          </select>
                                                         </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="service_locations" class="control-label col-md-3">Service Locations Zipcode/Pincode: </label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" name="service_locations" wire:model="service_locations">
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-success pull-right">Update Profile</button>

                                                    </form>
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


