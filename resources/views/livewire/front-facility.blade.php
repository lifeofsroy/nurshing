<div>
	@push('title')
        Our Facilities
    @endpush

    <section class="innHeadImg slider-back">
        <h1>Our Facilities</h1>
        <img class="slider-image" src="{{ asset('assets/img/innHead.png') }}" alt="" />
    </section>

	<section class="innerMainContain">
		<div class="container">
			{!! $facility->desc !!}
		</div>
	</section>
</div>
