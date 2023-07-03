<div>
    @push('title')
        Our Courses
    @endpush

    <section class="innHeadImg slider-back">
        <h1>Our Courses</h1>
        <img class="slider-image" src="{{ asset('assets/img/innHead.png') }}" alt="" />
    </section>

    <section class="courseComwrp">
        <div class="container">
            <div class="crsCompleteWrp">
                <main>
                    <div class="row">
                        @foreach ($courses as $index => $course)
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="item {{ $index == 0 ? 'active' : '' }}">
                                    <div class="coursesBlockAnn">
                                        <picture><img src="{{ asset('storage') }}/{{ $course->image }}"></picture>
                                        <article>
                                            <h4>{{ $course->title }}</h4>
                                            <p>{{ $course->short }}</p>

                                            <a href="{{ route('course.detail', ['course_slug' => $course->slug]) }}">read more <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </main>
            </div>
        </div>
    </section>
</div>
