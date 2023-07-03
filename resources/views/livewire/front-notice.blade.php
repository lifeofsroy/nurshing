<div>
    @push('title')
        Notice Board
    @endpush

    <section class="innHeadImg slider-back">
        <h1>Notice Board</h1>
        <img class="slider-image" src="{{ asset('assets/img/innHead.png') }}" alt="" />
    </section>

    <section class="innerMainContain">
        <div class="smallContainer noticeAn">
            @foreach ($notices as $notice)
                <span>
                    <a href="{{ 'storage' }}/{{ $notice->doc }}" target="_blank"># {{ $notice->title }}</a>
                </span>
            @endforeach
        </div>
    </section>
</div>
