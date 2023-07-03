<div>
    <script src="{{ asset('assets/js/nav_script.js') }}"></script>

    <script>
        $(function() {
            $('.navListing').removeClass('sub-menu');
        });
        $("html").easeScroll(0);
    </script>
    
    <header>
        <!-- top header -->
        <div class="topHeader">
            <div class="container">
                <marquee>
                    @foreach ($announces as $announce)
                        <a class="noticeLink" href="#">{{$announce->title}}</a>
                    @endforeach
                </marquee>
    
                <span>
                    <a href="{{$social->url}}" target="_blank">{{$social->name}}</a>
                </span>
            </div>
        </div>
        <!-- top header -->
    
        <!-- main header -->
        <nav>
            <div class="container">
                <a class="topLogo" href="{{route('home')}}"><img src="{{ asset('storage') }}/{{$header->logo}}" alt="" style="margin-top: 8px" /></a>
    
                <span class="toggle_icon"><b></b></span>
    
                <a class="contactBtn" href="{{ route('admission') }}">Apply Now</a>
    
                <div class="menu-header_menu-container">
                    <ul class="navListing sub-menu" id="menu-header_menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="{{ route('home') }}" aria-current="page">Home</a>
                        </li>
    
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a>About Us</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('about') }}">About Institution</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('pdesk') }}">Principal's Desk</a>
                                </li>
                            </ul>
                        </li>
    
                        <li class="menu-item menu-item-type-post_type menu-item-object-product">
                            <a href="{{ route('facility') }}">Facilities</a>
                        </li>
    
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a>Academics</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('course') }}">Courses Offered</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('eligibile') }}">Eligibility</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('feestuct') }}">Fees Structure</a>
                                </li>
                            </ul>
                        </li>
    
                        <li class="menu-item menu-item-type-post_type menu-item-object-product">
                            <a wire:click.prevent="export">Affiliation</a>
                        </li>
    
                        <li class="menu-item menu-item-type-post_type menu-item-object-product">
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- main header -->
    </header>
    
</div>