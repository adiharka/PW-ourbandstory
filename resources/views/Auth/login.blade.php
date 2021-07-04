@extends('master')

@section('title')
<title>Login</title>
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
                                            <form action="{{ route('login') }}" method="POST"
                                                class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form"
                                                style="padding: 10px" source="custom" name="form-1" redirect="true">
                                                @csrf
                                                @include('alert')
                                                <div class="u-form-email u-form-group">
                                                    <label for="email-4b30" class="u-label u-label-1">E-mail</label>
                                                    <input type="email" placeholder="" id="email-4b30" name="email"
                                                        class="u-border-1 u-border-grey-60 u-grey-75 u-input u-input-rectangle u-input-1"
                                                        required="">
                                                </div>
                                                <div class="u-form-email u-form-group u-form-group-2">
                                                    <label for="email-c1ec" class="u-label u-label-2">Password</label>
                                                    <input type="password" placeholder="Masukkan kata sandi"
                                                        id="email-c1ec" name="password"
                                                        class="u-border-1 u-border-grey-60 u-grey-75 u-input u-input-rectangle u-input-2"
                                                        required="" autofocus="autofocus">
                                                </div>
                                                <input type="hidden" value="" name="recaptchaResponse">
                                                <div class="u-align-center u-form-group">
                                                    <h6 class="u-text">Don't Have Account ?</h6>
                                                    <h6 class="u-text">
                                                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3"
                                                            href="{{ route('register') }}"
                                                            >Register</a>
                                                    </h6>
                                                </div>
                                                <button type="submit"
                                                    class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-3">LOGIN</button>
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
