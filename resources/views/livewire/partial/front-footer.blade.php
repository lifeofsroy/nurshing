<div>
    <!-- footer -->
    <footer style="background-image: url({{asset('assets/img/footBac.png')}});">
        <div class="container">
            <div class="col-xs-12 col-sm-4 col-md-3 footBlk">
                <article>
                    <h3>{{ $footer->title }}</h3>
                    <p>{{ $footer->desc }}</p>
                </article>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 footBlk">
                <article>
                    <h3>Academic</h3>
                    <div class="menu-footer_academic_menu-container">
                        <ul class="menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('eligibile')}}">Eligibility</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('feestuct')}}">Fees Structure</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('facility')}}">Facility</a></li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 footBlk">
                <article>
                    <h3>Quick Links</h3>
                    <div class="menu-footer_quick_link_menu-container">
                        <ul class="double">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('about')}}">Our Institution</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('contact')}}">Contact Us</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('pdesk')}}">Principal's Desk</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('policy.show')}}">Pivacy Policy</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('cookie.show')}}">Cookie Policy</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{route('terms.show')}}">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 footBlk">
                <article>
                    <h3>Contact Us</h3>
                    <ul>
                        <li>
                            <p><i class="fa fa-phone"></i> {{$contact->phone}}</p>
                        </li>
                        <li>
                            <p><i class="far fa-envelope"></i> {{$contact->email}}</p>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <!-- copyright -->
    <span class="endFooter">
        <p>© {{ date('Y') }} {{ $footer->copyright }}</p>
    </span>
    <!-- copyright -->
</div>
