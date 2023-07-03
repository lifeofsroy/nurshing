<div>
    @push('title')
        {{ $privacy->title }}
    @endpush

    <section class="innHeadImg slider-back">
        <h1>{{ $privacy->title }}</h1>
        <img class="slider-image" src="{{ asset('assets/img/innHead.png') }}" alt="" />
    </section>

    <section class="innerMainContain">
        <div class="container">
            {!! $privacy->desc !!}
        </div>
    </section>
</div>
