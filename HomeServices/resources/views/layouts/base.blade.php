<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PureServiceCoop - Online Service Provider for your House Needs</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png') }}') }}">
    <link href="{{asset('assets/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/chblue.css') }}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/dtb/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/css/toastr.min.css') }}" rel="stylesheet" media="screen">        
    <script type="text/javascript" src="{{asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui.1.10.4.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/modernizr.js') }}"></script>
    @livewireStyles
</head>
<body>
    <div id="layout">
        <header id="header" class="header-v3" style="background-color: #f2f2f2;">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <a href="/"><img src="{{asset('images//logo.png') }}"></a>
                    </li>
                    <li>
                       <a href="{{route('home.serviceCategories')}}"> Service Categories</a>
                    </li>
                    <li> <a href="#">Appliances</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="#">Computer Repair</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">AC</a></li>
                            <li><a href="#">Geyser</a></li>
                        
                        </ul>
                    </li>
                    <li> <a href="#">Home Needs</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="#">Laundry</a></li>
                            <li><a href="#">Electrical</a></li>
                            <li><a href="#">Pest Control</a></li>
                            <li><a href="#">Carpentry</a></li>
                       
                        </ul>
                    </li>
                    <li> <a href="#">Home Cleaning</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="#">Bedroom Deep Cleaning</a></li>
                            <li><a href="#">Overhead Water Storage </a></li>
                            <li><a href="#">Tank Cleaning</a></li>
                            <li><a href="#">Underground Sump Cleaning</a>
                            </li>
                      
                        </ul>
                    </li>
                    <li> <a href="#">Special Services</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="#">Document Services</a></li>
                            <li><a href="#">Cars &amp; Bikes</a></li>
                            <li><a href="#">Movers &amp; Packers </a></li>
                            <li><a href="#">Home Automation</a></li>
                        </ul>
                    </li>
                    
                    @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->utype === 'ADM')
                              <li class="login-form"> <a href="#" title="Register">My Account (Admin)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{route('admin.serviceCategories')}}">Service Categories</a></li>
                                        <li><a href="{{route('admin.services')}}">Services</a></li>
                                        <li><a href="{{route('admin.serviceProviders')}}">Service Providers</a></li>
                                        <li><a href="{{route('admin.slider')}}">Slider</a></li>
                                        <li><a href="{{route('admin.contacts')}}">Contacts</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                  </ul>
                                </li>
                            @elseif(Auth::user()->utype === 'SVP')
                                 <li class="login-form"> <a href="#" title="Register">My Account (Service Provider)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('sprovider.dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{route('sprovider.profile')}}">My Profile</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                  </ul>
                                </li>
                            @else
                                  <li class="login-form"> <a href="#" title="Register">My Account (Customer)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('customer.dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                  </ul>
                                </li>
                            @endif
                            <form id="logout-form" method="post" action="{{route('logout')}}" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <li class="login-form"> <a href="{{route('register')}}" title="Register">Register</a></li>
                           <li class="login-form"> <a href="{{route('login')}}" title="Login">Login</a></li>
                        @endif
                    @endif
                   
                    <li class="search-bar">
                    </li>
                </ul>
            </nav>
        </header>

        {{$slot}}
        <footer id="footer" class="footer-v1" style="background-color: #004d33;">
            <div class="container">
                <div class="row visible-md visible-lg">
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>APPLIANCE SERVICES </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="#/">TV</a></li>
                            <li><i class="fa fa-check"></i> <a href="#/">Geyser</a></li>
                            <li><i class="fa fa-check"></i> <a href="#/">Refrigerator</a></li>
                            <li><i class="fa fa-check"></i> <a href="#/">Washing Machine</a>
                            </li>
                        
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>AC SERVICES </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a
                                    href="#">Installation</a></li>
                            <li><i class="fa fa-check"></i> <a
                                    href="#">Uninstallation</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">AC Repair</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Gas Refill</a>
                            </li>
                           
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>HOME NEEDS </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="#/">Laundry </a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Electrical</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Pest Control </a></li>  
                            <li><i class="fa fa-check"></i> <a href="#">Plumbing </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>CONTACT US</h3>
                        <ul class="contact_footer">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Faridabad, Haryana, India</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:contact@pureservice.com<">contact@pureservice.com<</a>
                            </li>
                            <li>
                                <i class="fa fa-headphones"></i> <a href="tel:+911234567890">+91-1234567890</a>
                            </li>
                        </ul>
                     
                    </div>
                </div>
                <div class="row visible-sm visible-xs">
                    <div class="col-md-6">
                        <h3 class="mlist-h">CONTACT US</h3>
                        <ul class="contact_footer mlist">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Faridabad, Haryana, India</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:contact@pureservice.com">contact@pureservice.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> <a href="tel:+911234567890">+91-1234567890</a>
                            </li>
                        </ul>
                        <ul class="social mlist-h">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav-footer">
                                <li><a href="{{route('home.contact')}}">Contact Us</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="text-xs-center crtext">&copy; 2022 PureService. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>                
            </div>            
        </footer>
    </div>
    <script type="text/javascript" src="{{asset('assets/js/nav/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/totop/jquery.ui.totop.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/accordion/accordion.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/maps/gmap3.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/carousel/carousel.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/filters/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/twitter/jquery.tweet.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/flickr/jflickrfeed.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/theme-options/theme-options.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/theme-options/jquery.cookies.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap-slider.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/jquery.table2excel.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/script.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/validation-rule.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap3-typeahead.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none", 
                delay: 5000,
                startwidth: 1170,
                startheight: 480,
                minHeight: 250,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        });
    </script>
    @stack('scripts')
    @livewireScripts
</body>
</html>