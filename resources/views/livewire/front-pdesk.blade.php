<div>
    @push('title')
        Principal's Desk
    @endpush

    <section class="innHeadImg slider-back">
        <h1>Principal's Desk</h1>
        <img class="slider-image" src="{{ asset('assets/img/innHead.png') }}" alt="" />
    </section>

    <section class="innerMainContain">
        <div class="container">
            <p>{!! $desk->desc !!}</p>
        </div>
    </section>
</div>
