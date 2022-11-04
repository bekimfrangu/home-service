<div>
<div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Contact Us</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-central">
            <div class="semiboxshadow text-center">
                <img src="img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div id="map" class="honmob"> </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <aside>
                                    <h4>The Office</h4>
                                    <address>
                                        <strong>SurfsideMedia Home Services.</strong><br>
                                        <i class="fa fa-map-marker"></i><strong>Address: </strong>Faridabad, Haryana,
                                        India<br>
                                        <i class="fa fa-phone"></i><strong>Phone: </strong> +91-1234567890
                                    </address>
                                    <address>
                                        <strong>SurfsideMedia Emails</strong><br>
                                        <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                            href="mailto:contact@surfsidemedia.in"> contact@surfsidemedia.in</a><br>
                                        <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                            href="mailto:support@surfsidemedia.in"> support@surfsidemedia.in</a>
                                    </address>
                                </aside>
                                <hr class="tall">
                            </div>
                            <div class="col-md-8">
                                <h3>Contact Form</h3>
                                <p class="lead">
                                </p>
                                @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('message')}}
                                        </div>
                                @endif
                                <form id="contactform" class="form-theme" wire:submit.prevent="sendMessage">
                                 
                                    <input type="text" placeholder="Name" name="name" id="name" required="" wire:model="name">
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    
                                    <input type="email" placeholder="Email" name="email" id="email" required="" wire:model="email">
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    <input type="text" placeholder="Phone" name="phone" id="phone" required="" wire:model="phone">
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    <textarea placeholder="Your Message" name="message" id="message"
                                        required="" wire:model="message"></textarea>
                                    @error('message')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    <input type="submit" name="Submit" value="Send Message" class="btn btn-primary">
                                </form>
                                <div id="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-twitter content_resalt border-top">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
