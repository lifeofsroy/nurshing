<div>
    @push('title')
        {{ $course->title }}
    @endpush

    <section class="innHeadImg slider-back">
        <h1>{{ $course->title }}</h1>
        <img class="slider-image" src="{{ asset('assets/img/innHead.png') }}" alt="" />
    </section>

    <section class="innerMainContain">
        <div class="container">
            {!! $course->desc !!}
        </div>
    </section>

</div>
