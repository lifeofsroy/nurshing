<div>
    @push('title')
        {{ $term->title }}
    @endpush

    <section class="innHeadImg slider-back">
        <h1>{{ $term->title }}</h1>
        <img class="slider-image" src="{{ asset('assets/img/innHead.png') }}" alt="" />
    </section>

    <section class="innerMainContain">
        <div class="container">
            {!! $term->desc !!}
        </div>
    </section>
</div>
