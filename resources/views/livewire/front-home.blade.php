<div>
    @push('title')
        Nursing Institution
    @endpush

    <!-- slider -->
    <section class="topSlider">
        <div class="carousel slide" id="myCarousel" data-ride="carousel">

            <article>
                <h1>{{ $banner->title }}</h1>
                <p>{{ $banner->subtitle }}</p>

                <a href="{{ route('admission') }}">apply now</a>
            </article>

            <div class="carousel-inner">
                @foreach ($sliders as $index=>$slider)
                    <div class="item slider-back {{$index == 0 ? 'active' : ''}}">
                        <img class="slider-image" src="{{ asset('storage') }}/{{$slider->image}}" alt="">
                    </div>
                @endforeach
            </div>

            <a class="arrow leftArrow" data-slide="prev" href="#myCarousel">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="arrow rightArrow" data-slide="next" href="#myCarousel">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </section>
    <!-- slider -->

    <!-- about us -->
    <section class="aboutWrap">
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-5 imgWrp">
                <picture><img src="{{ asset('storage') }}/{{ $desk->image }}"></picture>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 txtWrp">
                <article>
                    <h2>{{ $desk->title }}</h2>
                    <p>{!! $desk->desc !!}</p>

                    <a href="#">know more</a>
                </article>
            </div>
        </div>
    </section>
    <!-- about us -->

    <!-- ads -->
    <section class="courseComwrpextra">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 crsCompleteWrpextra">
                <main>
                    <marquee>
                        @foreach ($adses as $ads)
                            <h2>{{ $ads->title }}</h2>
                        @endforeach
                    </marquee>

                </main>
            </div>

        </div>
    </section>
    <!-- ads -->

    <!-- coueses -->
    <section class="courseComwrp">
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-6 crsCompleteWrp">
                <main>
                    <h2>Courses</h2>
                    <div class="carousel slide" id="myCarousel" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($courses as $index => $course)
                                <div class="item {{ $index == 0 ? 'active' : '' }}">
                                    <div class="coursesBlockAnn">
                                        <picture><img src="{{ asset('storage') }}/{{ $course->image }}"></picture>
                                        <article>
                                            <h4>{{ $course->title }}</h4>
                                            <p>{{ $course->short }}</p>

                                            <a href="{{ route('course.detail', ['course_slug' => $course->slug]) }}">read more <i class="fas fa-arrow-right"></i></a>
                                        </article>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </main>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-5 noticeWrap">
                <main>
                    <h2>Notice Board</h2>
                    <div class="marqueeWrp">
                        <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount=3>
                            @foreach ($notices as $notice)
                                <a href="#"># {{ $notice->title }}</a>
                            @endforeach
                        </marquee>
                    </div>
                    <span>
                        <a href="{{ route('notice') }}">Read More</a>
                    </span>
                </main>
            </div>
        </div>
    </section>
    <!-- coueses -->

    <!-- facility -->
    <section class="facilityWrap">
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-5 imgWrp">
                <picture>
                    <img src="{{ asset('storage') }}/{{ $facility->image }}">
                </picture>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 txtWrp">
                <article>
                    <h2>{{ $facility->title }}</h2>
                    <div>
                        {!! $facility->desc !!}
                    </div>
                    <a href="#">know more</a>
                </article>
            </div>
        </div>
    </section>
    <!-- facility -->

    <!-- testimonial -->
    <section class="testimonialWrap" style="background: url({{asset('assets/img/testimonial.png')}});">
        <div class="smallContainer">
            <main style="margin: 100px 0 0 0;">
                <h2>Testimonial</h2>
                <div class="carousel slide" id="testimonial" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach ($testis as $item => $testi)
                            <li class="" data-target="#testimonial" data-slide-to="{{ $item }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($testis as $index => $testi)
                            <div class="item {{ $index == 0 ? 'active' : '' }}">
                                <p>{{ $testi->desc }}</p>
                                <name>{{ $testi->name }}</name>
                            </div>
                        @endforeach
                    </div>
                </div>
            </main>
        </div>
    </section>
    <!-- testimonial -->

    <!-- contacts -->
    <section class="contactSection">
        <div class="col-xs-12 col-sm-6 col-md-6 ContactDes">
            <main>
                <h2>Contact Us</h2>
                <article>
                    <p><i class="fa fa-phone"></i>{{ $contact->phone }}</p>
                    <p><i class="fa fa-envelope"></i>{{ $contact->email }}</p>
                    <p><i class="fa fa-map-marker"></i>{{ $contact->address }}</p>
                </article>
                <span>
                    <h3>Follow Us On</h3>
                    @foreach ($socials as $social)
                        <a href="{{ $social->url }}" target="_blank"><i class="{{ $social->icon }}"></i></a>
                    @endforeach
                </span>
            </main>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 ContactMap">
            <map>
                <iframe src="{{ $contact->mapurl }}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </map>
        </div>
    </section>
    <!-- contacts -->
</div>
