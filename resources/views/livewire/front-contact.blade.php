<div>
    @push('title')
        Contact Us
    @endpush

    <section class="innHeadImg slider-back">
        <h1>Contact Us</h1>
        <img class="slider-image" src="{{ asset('assets/img/innHead.png') }}" alt="" />
    </section>

    <section class="toptreeBlk">
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-4 trblk">
                <div class="trBlkInn">
                    <i class="fa fa-phone"></i>
                    <h2>Available 24X7</h2>
                    <p>{{ $contact->phone }}</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 trblk">
                <div class="trBlkInn">
                    <i class="fa fa-envelope"></i>
                    <h2>Send Us Mail</h2>
                    <p>{{ $contact->email }}</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 trblk">
                <div class="trBlkInn">
                    <i class="fa fa-map-marker"></i>
                    <h2>We're Here</h2>
                    <p>{{ $contact->address }}</p>
                </div>
            </div>
        </div>
    </section>


    <section class="contactWrp">
        <div class="AllHeader">
            <h2>
                <small> Have You Any Query ? <b></b></small>
                Send us a Message
            </h2>
        </div>

        <div class="smallContainer">
            <main>
                <div class="screen-reader-response">
                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                    <ul></ul>
                </div>
                <form class="init" wire:submit.prevent="contactRequest">
                    <div>
                        <input class="usrInn" name="name" type="text" placeholder="Enter Full Name" wire:model.lazy="name" />
                        @error('name')
                            <small class="error-msz">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <input class="usrInn" name="email" type="email" placeholder="Enter Email Address" wire:model.lazy="email" />
                        @error('email')
                            <small class="error-msz">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <input class="usrInn" name="phone" type="text" placeholder="Enter Phone Number" wire:model.lazy="phone" />
                        @error('phone')
                            <small class="error-msz">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <input class="usrInn" name="subject" type="text" placeholder="Enter Subject" wire:model.lazy="subject" />
                        @error('subject')
                            <small class="error-msz">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <textarea class="usrInn" name="message" cols="10" rows="10" placeholder="Enter Message" wire:model.lazy="desc"></textarea>
                        @error('desc')
                            <small class="error-msz">{{ $message }}</small>
                        @enderror
                    </div>

                    <button class="form-submit" type="submit">SUBMIT</button>
                </form>
            </main>
        </div>

    </section>

    <map class="contactMap">
        <iframe src="{{ $contact->mapurl }}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </map>

    @push('script')
        <script>
            window.addEventListener('added', event => {
                Swal.fire(
                    event.detail.message,
                    'You will receive an email from us regarding this',
                    'success'
                )
            })
        </script>
    @endpush
</div>
