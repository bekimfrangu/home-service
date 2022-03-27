<div>
    <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Add Service</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Add Service</li>
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
                                                    Add New Service
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{route('admin.services')}}" class="btn btn-info pull-right">All Services</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                    @if(Session::has('message'))
                                    <script>
                                          swal("Success!", "{!! Session::get('message') !!}","Success", {
                                            button: "OK",
                                        })
                                    </script>
                                      
                                    @endif
                                        <form class="form-horizontal" wire:submit.prevent="createService">
                                            @csrf
                                                <div class="form-group">
                                                    <label for="name" class="control-label col-sm-3">Name:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug"/>
                                                    @error('name')
                                                         <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="slug" class="control-label col-sm-3">Slug:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control " name="slug" wire:model="slug"/>
                                                     @error('slug')
                                                         <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="tagline" class="control-label col-sm-3">Tagline:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control " name="tagline" wire:model="tagline"/>
                                                     @error('tagline')
                                                         <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="service_category_id" class="control-label col-sm-3">Service Category:</label>
                                                    <div class="col-sm-9">
                                                        <select name="service_category_id" class="form-control" id="service_category_id" wire:model="service_category_id">
                                                            <option value="">Select Category</option>
                                                        @foreach($scategories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                        </select>
                                                     @error('service_category_id')
                                                         <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="price" class="control-label col-sm-3">Price:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control " name="price" wire:model="price"/>
                                                     @error('price')
                                                         <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="discount" class="control-label col-sm-3">Discount:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control " name="discount" wire:model="discount"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="discount_type" class="control-label col-sm-3">Discount Type:</label>
                                                    <div class="col-sm-9">
                                                        <select name="discount_type" class="form-control" id="discount_type" wire:model="discount_type">
                                                            <option value="">Select Type</option>   
                                                            <option value="fixed">Fixed</option>
                                                            <option value="percent">Percent</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="description" class="control-label col-sm-3">Description:</label>
                                                    <div class="col-sm-9">
                                                       <textarea name="description" id="description" class="form-control" wire:model="description"></textarea>
                                                     @error('description')
                                                         <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inclusion" class="control-label col-sm-3">Inclusion:</label>
                                                    <div class="col-sm-9">
                                                       <textarea name="inclusion" id="inclusion" class="form-control" wire:model="inclusion"></textarea>
                                                     @error('inclusion')
                                                         <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exclusion" class="control-label col-sm-3">Exclusion:</label>
                                                    <div class="col-sm-9">
                                                       <textarea name="exclusion" id="exclusion" class="form-control" wire:model="exclusion"></textarea>
                                                     @error('exclusion')
                                                         <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="thumbnail" class="control-label col-sm-3">Thumbnail:</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control-file" name="thumbnail" wire:model="thumbnail"/>
                                                    @if($thumbnail)
                                                            <img src="{{$thumbnail->temporaryUrl()}}" width="100" alt="">
                                                        @endif

                                                    @error('thumbnail')
                                                         <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="image" class="control-label col-sm-3">Image:</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control-file" name="image" wire:model="image"/>
                                                    @if($image)
                                                            <img src="{{$image->temporaryUrl()}}" width="100" alt="">
                                                        @endif

                                                    @error('image')
                                                         <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-success pull-right">Add Service</button>
                                        </form>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
</div>


