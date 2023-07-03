<div>
    <style>
        .wh-float {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 50px;
            right: 6px;
            color: #14ef05;
            text-align: center;
            font-size: 42px;
            z-index: 100;
        }

        .wh-my-float {
            margin-top: 12px;
        }

        .ph-float {
            position: fixed;
            width: 40px;
            height: 50px;
            bottom: 105px;
            right: 11px;
            text-align: center;
            font-size: 42px;
            z-index: 100;
        }

        .ph-my-float {
            margin-top: 12px;
        }
    </style>

    @if ($plugin->ph_active)
        <a class="ph-float" href="tel:91{{$plugin->ph_num}}" target="_blank">
            <img class="ph-my-float" src="{{ asset('assets/img/phone.png') }}" style="width: 38px">
        </a>
    @endif

    @if ($plugin->wh_active)
        <a class="wh-float" href="https://api.whatsapp.com/send?phone=91{{$plugin->wh_num}}" ."="" target="_blank">
            <img class="wh-my-float" src="{{ asset('assets/img/whatsapp.png') }}" style="width: 44px">
        </a>
    @endif

</div>
