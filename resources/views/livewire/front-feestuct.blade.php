<div>
    @push('title')
        Fees Structure
    @endpush

    <section class="innHeadImg slider-back">
		<h1>Fees Structure</h1>
		<img class="slider-image" src="{{asset('assets/img/innHead.png')}}" alt="" />
	</section>

	<section class="innerMainContain">
		<div class="container">
			{!! $fees->desc !!}
		</div>
	</section>
</div>
