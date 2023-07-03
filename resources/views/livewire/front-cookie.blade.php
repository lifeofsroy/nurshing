<div>
    @push('title')
        {{ $cookie->title }}
    @endpush

    <section class="innHeadImg slider-back">
        <h1>{{ $cookie->title }}</h1>
        <img class="slider-image" src="{{ asset('assets/img/innHead.png') }}" alt="" />
    </section>

    <section class="innerMainContain">
        <div class="container">
            {!! $cookie->desc !!}
        </div>
    </section>
</div>
