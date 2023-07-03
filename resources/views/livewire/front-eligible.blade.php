<div>
    @push('title')
        Eligibility
    @endpush

    <section class="innHeadImg slider-back">
		<h1>{{ $eligible->title }}</h1>
		<img class="slider-image" src="{{asset('assets/img/innHead.png')}}" alt="" />
	</section>

	<section class="innerMainContain">
		<div class="container">
			{!! $eligible->desc !!}
		</div>
	</section>
</div>
