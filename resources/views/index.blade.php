<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Khayalami Developers</title>
        {{-- Styles --}}
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        {{-- Scripts --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            <div class="card-body contact-form" id="contact-form">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success"> {{ Session::get('flash_message')}} </div>
                @endif
                <form action="{{ route('contact-us')}}" method="POST">
                    @csrf
                    <div>
                        <input class="form-inf @error('name') is-invalid @enderror" type="text" id="fname" name="name" placeholder="Name"><br>
                        @if ($errors->has('name'))
                            <small class="form-text invalid-feedback"> {{ $errors->first('name')}} </small>
                        @endif
                    </div>
                    <div>
                        <input class="form-inf @error('email') is-invalid @enderror" type="text" id="email" name="email" placeholder="Email"><br>
                        @if ($errors->has('email'))
                            <small class="form-text invalid-feedback"> {{ $errors->first('email')}} </small>
                        @endif
                    </div>
                    <div>
                        <textarea class="form-inf @error('message_body') is-invalid @enderror" id="subject" name="message_body" placeholder="Message"></textarea><br>
                        @if ($errors->has('message_body'))
                            <small class="form-text invalid-feedback"> {{ $errors->first('message_body')}} </small>
                        @endif
                    </div>
                    <button class="form-btn" type="submit" value="Submit">Submit</button>
                </form>
            </div>
            
        <footer></footer>
    </body>
</html>
