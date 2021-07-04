@extends('master')

@section('title')
<title>Register</title>
<link rel="stylesheet" href="{{ asset('CSS/Register.css') }}" media="screen" />
@endsection

@section('content')
<section class="u-clearfix u-section-1" id="carousel_91cc">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
            <div class="u-layout-row">
                <div class="u-size-30 u-size-60-md">
                    <div class="u-layout-row">
                        <div class="u-container-style u-image u-layout-cell u-left-cell u-size-60 u-image-1"
                            style="background-image: url('{{ asset('images/pexels-photo-4196949.jpeg') }}');">
                            <div class="u-container-layout u-container-layout-1"></div>
                        </div>
                    </div>
                </div>
                <div class="u-size-30 u-size-60-md">
                    <div class="u-layout-col">
                        <div class="u-size-40">
                            <div class="u-layout-row">
                                <div class="u-align-center u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-2"
                                    style="background-image: url('{{ asset('images/pexelsphoto167092.jpeg') }}');">
                                    <div class="u-container-layout u-container-layout-2">
                                        <h2 class="u-text u-text-1">Our Band Story</h2>
                                        <h4 class="u-custom-font u-text u-text-2">By: Nadhif - Austrin - Syahrul
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-20">
                            <div class="u-layout-row">
                                <div
                                    class="u-container-style u-layout-cell u-right-cell u-shape-rectangle u-size-60 u-white u-layout-cell-3">
                                    <div class="u-container-layout u-container-layout-3">
                                        <div class="u-form u-form-1">
                                            <form action="{{ route('register') }}" method="POST"
                                                class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form"
                                                style="padding: 10px" source="custom" name="form-1" redirect="true">
                                                @csrf
                                                @if(session('errors'))
                                                    <div id='alert' class='normal'>
                                                        <h4 style="margin: 0">Terjadi Error:</h4>
                                                        <ul>
                                                            @foreach($errors->all() as $error)
                                                                <li>
                                                                    <h4>{{ $error }}</h4>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div style="margin-bottom: 1.5rem"></div>
                                                @endif
                                                @if(session('success'))
                                                    <div id='alert' class='normal'>
                                                        <ul style="margin-top:0">
                                                            <li>
                                                                <h4>{{ session('success') }}</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div style="margin-bottom: 1.5rem"></div>
                                                @endif

                                                <div class="u-form-email u-form-group">
                                                    <label for="email-4b30" class="u-label u-label-1">E-mail</label>
                                                    <input type="email" placeholder="Contoh: anonymous@gmail.com"
                                                        id="email-4b30" name="email"
                                                        class="u-grey-75 u-input u-input-rectangle u-input-1"
                                                        required="">
                                                </div>
                                                <div class="u-form-email u-form-group u-form-group-2">
                                                    <label for="password" class="u-label u-label-2">Password</label>
                                                    <input type="password" placeholder="Masukkan kata sandi"
                                                        id="password" name="password"
                                                        class="u-grey-75 u-input u-input-rectangle u-input-2" required
                                                        autofocus="autofocus">
                                                </div>
                                                <div class="u-form-group u-form-group-3">
                                                    <label for="password_confirmation" class="u-label u-label-3">Confirm
                                                        Password</label>
                                                    <input type="password" placeholder="Masukan ulang kata sandi"
                                                        id="password_confirmation" required name="password_confirmation"
                                                        class="u-grey-75 u-input u-input-rectangle u-input-3">
                                                </div>
                                                {{-- <div class="u-form-checkbox u-form-group u-form-group-4">
                                                    <input type="checkbox" id="checkbox-1bdb" name="checkbox"
                                                        value="On">
                                                    <label for="checkbox-1bdb" class="u-label u-label-4">Ingat
                                                        Saya</label>
                                                </div> --}}
                                                {{-- <div class="u-align-center u-form-group u-form-submit">
                                                    <a href="#"
                                                        class="u-btn u-btn-submit u-button-style u-none u-text-black u-text-hover-white u-btn-1">
                                                        <br>
                                                    </a>
                                                    <input type="submit" value="submit"
                                                        class="u-form-control-hidden">
                                                </div>
                                                <div class="u-form-send-message u-form-send-success">Thank you! Your
                                                    message has been sent.</div>
                                                <div class="u-form-send-error u-form-send-message"> Unable to send
                                                    your message. Please fix errors then try again. </div>
                                                <input type="hidden" value="" name="recaptchaResponse"> --}}
                                                <div class="u-align-center u-form-group">
                                                    <h6 class="u-text">Have an Account ?</h6>
                                                    <h6 class="u-text">
                                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                                                            href="{{ route('login') }}"
                                                            data-page-id="262091916">Login<span
                                                                style="font-weight: 700;"></span>
                                                        </a>
                                                    </h6>
                                                </div>
                                                <button type="submit"
                                                    class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-3">
                                                    REGISTER</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
