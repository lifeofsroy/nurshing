<x-app-layout>
    @push('title')
        Page Not Found
    @endpush

    <section class="innerMainContain">
        <div class="container">
            <div class="page404Cont">
                <h1>404
                    <small>Page Not Found</small>
                </h1>
                <a href="{{route('home')}}">Back to Home</a>
            </div>
        </div>
    </section>
</x-app-layout>
