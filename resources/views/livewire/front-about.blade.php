<div>
    @push('title')
        About Our Institution
    @endpush

    <section class="innHeadImg slider-back">
        <h1>About Our Institution</h1>
        <img class="slider-image" src="{{ asset('assets/img/innHead.png') }}" alt="" />
    </section>

    <section class="innerMainContain">
        <div class="container">
            {!! $about->desc !!}
        </div>
    </section>

</div>
