<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Khayalami Developers</title>
        {{-- Styles --}}
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="validation.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        {{-- Scripts --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="validation.min.js"></script>
    </head>

    <body>
        <header></header>
            <div class="header-head">
                <b>{{ __("KHAYALAMI DEVELOPERS")}}</b>
            </div>
            <div class="logo-image">
                <img class="img-responsive" src="{{ asset('src/logo.png') }}" alt="">
            </div>

        <section></section>
            <div class="text-banner">
                <b>{{ __("WORK WITH US")}}</b><br>
                {{ __("Get in touch with us and find out how we can help you.") }}<br>
            </div>
            <button type="button" class="btn btn-default btn-learn">
                <a href="#contact-form">{{ __("Learn more")}}</a>
            </button>

        <section></section>
            <div class="about-content">
                <div class="header-abt">
                    <b>{{ __("About us")}}</b>
                </div>
                <p>
                    {{ __("We are Khayalami Developers LTD PVT, a construction company that
                    does more than build houses, we build homes. With our many years of experience
                    and our unique skill set we are able to take your home from concept to reality.
                    And because your home is our business we also cater for specific jobs such as Home Renovations,
                    Ceiling, Tiling, Concrete and Decking Formwork and Roofing."
                    )}}
                </p>
            </div>

        <main></main>
            <div class="services-head">
                <b>{{ __("Our Services")}}</b>
            </div>
            <div class="row">
                <div class="column">
                    <img class="img-responsive" src="{{ asset('src/homeB.png') }}" alt="">
                    <img class="img-responsive" src="{{ asset('src/Tiling.png') }}" alt="">
                </div>
                <div class="column">
                    <img class="img-responsive" src="{{ asset('src/HomeR.png') }}" alt="">
                    <img class="img-responsive" src="{{ asset('src/Concrete.png') }}" alt="">
                </div>
                <div class="column">
                    <img class="img-responsive" src="{{ asset('src/Ceiling.png') }}" alt="">
                    <img class="img-responsive" src="{{ asset('src/decking.png') }}" alt="">
                </div>
                  <div class="column shutt-roof">
                    <img class="img-responsive" src="{{ asset('src/roofing.png') }}" alt="">
                </div>
                <div class="column shutt-roof">
                    <img class="img-responsive" src="{{ asset('src/Shuttering.png') }}" alt="">
                </div>
            </div>

        <section></section>
            <div class="contact-head">
                <b>{{ __("CONTACT US")}}</b>
            </div>
            @if(Session::has('flash_message'))
                <div class="alert alert-success"> {{ Session::get('flash_message')}} </div>
            @endif
            <div class="card-body contact-form" id="contact-form">
                <form action="{{ route('contact-us')}}" method="POST">
                    @csrf
                    <div>
                        <input class="form-inf is-invalid" type="text" id="fname" name="name" 
                        placeholder="@if($errors->has('name')){{ $errors->first('name')}}@else {{__('Name')}} @endif" required>
                        <br>
                    </div>
                    <div>
                        <input class="form-inf is-invalid" type="text"
                         id="email" name="email" placeholder="@if($errors->has('email')){{ $errors->first('email')}}@else {{__('Email')}} @endif"
                         title="The domain portion of the email address is invalid (the portion after the @)." 
                         pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d
                         \x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\
                         x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x
                         20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\
                         x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xf
                         f]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required><br>
                    </div>
                    <div>
                        <textarea class="form-inf is-invalid" id="subject"
                         name="message_body" placeholder="@if($errors->has('message_body')){{ $errors->first('message_body')}}@else {{__('Message')}} @endif" maxlength="225" required></textarea><br>
                    </div>
                    <button class="form-btn" type="submit"  value="Submit">Submit</button>
                </form>
            </div>

        <footer></footer>
            <div class="row call-add">
                <img src="{{ asset("src/phone.svg")}}" alt="">
                <div class="cell-line">
                    <p>{{ __("(+27) 62 041 0580")}}</p>
                    <p>{{ __("(+27) 21 007 4428")}}</p>
                </div>
                <a href="https://maps.google.com/?q=4 Rand Road, Blackheath, Cape Town, 7581">
                    <img src="{{ asset("src/map-pin.svg")}}" alt="">
                </a>
                    <div class="pin-add">
                        <a href="https://maps.google.com/?q=4 Rand Road, Blackheath, Cape Town, 7581">
                        <p>{{ __("4 Rand Rd") }}</p>
                        <p>{{ __("Blackheath") }}</p>
                        <p>{{ __("Cape Town")}}</p>
                        <p>{{ __("7581")}}</p>
                        </a>
                    </div>
            </div>
    </body>
</html>