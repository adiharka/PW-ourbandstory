@extends('master')

@section('title')
<title>Reservasi</title>
<link rel="stylesheet" href="{{ asset('CSS/Reservasi.css') }}" media="screen" />
@endsection

@section('content')
<section class="u-align-center u-clearfix u-grey-70 u-section-1" id="sec-2c25">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">Our Band Story</h2>
        <div id="carousel-bd35" data-interval="5000" data-u-ride="carousel"
            class="u-carousel u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
            <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
                <li data-u-target="#carousel-bd35" class="u-active u-grey-30" data-u-slide-to="0"></li>
                <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="1"></li>
            </ol>
            <div class="u-carousel-inner" role="listbox" style="">
                <div
                    class="u-active u-align-center-md u-align-center-sm u-align-center-xs u-carousel-item u-container-style u-slide">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                        <img alt="" class="u-image u-image-default u-image-1" data-image-width="150"
                            data-image-height="84"
                            src="{{ asset('images/e408af2f87fd39bbc27c2b1635ac8e63c40fac6f8b4850108464a6abdb40a636c87dcc0c22029f02a69602b7b628ee037d732ad225d155aad2df92_1280.jpg') }}">
                    </div>
                </div>
                <div class="u-carousel-item u-container-style u-expanded-width u-slide">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                        <img alt="" class="u-image u-image-default u-image-2" data-image-width="150"
                            data-image-height="99"
                            src="{{ asset('images/4d4b4cec150d2c96983a767fef7bcfcb6254c6266cdf48ef8ddd46eb15acf09468873fe36b385b1b5a6418b9c4aa4727e8bac16632939860077cc2_1280.jpg') }}">
                    </div>
                </div>
            </div>
            <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-spacing-12 u-text-grey-30 u-carousel-control-1"
                href="#carousel-bd35" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                    <svg viewBox="0 0 477.175 477.175">
                        <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path>
                    </svg>
                </span>
                <span class="sr-only">+Previous</span>
            </a>
            <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-spacing-12 u-text-grey-30 u-carousel-control-2"
                href="#carousel-bd35" role="button" data-u-slide="next">
                <span aria-hidden="true">
                    <svg viewBox="0 0 477.175 477.175">
                        <path
                            d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">+Next</span>
            </a>
        </div>
    </div>
</section>
<section class="u-align-center u-black u-clearfix u-section-2" id="carousel_6aec">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-left u-text u-text-1">Reservasi</h2>
        <h6 class="u-align-left u-text u-text-2">Kami menyediakan studio musik premium untuk berbagai keperluan
            bermusik Anda. Segala keperluan yang Anda butuhkan dapat kami sediakan demi pengalaman bermusik yang
            sempurna.</h6>
        <div class="u-form u-form-1">
            <form action="{{ route('user.reservasi.store') }}" method="POST"
                class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form"
                style="padding: 10px" source="custom" name="form" redirect="true">
                @csrf
                @include('alert')
                <div class="u-form-group u-form-name">
                    <label for="name-3b9a" class="u-label">Nama Pemesan</label>
                    <input type="text" placeholder="Nama Lengkap" id="name-3b9a" name="pemesan"
                        class="u-border-1 u-border-grey-30 u-grey-70 u-input u-input-rectangle u-radius-5"
                        required="">
                </div>
                <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-2">
                    <label for="date-1345" class="u-label">Waktu Reservasi</label>
                    <input type="datetime-local" placeholder="MM/DD/YYYY" id="date-1345" name="date"
                        class="u-border-1 u-border-grey-30 u-grey-70 u-input u-input-rectangle u-radius-5"
                        required="">
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-3">
                    <label for="phone-8a32" class="u-label">No. Telfon</label>
                    <input type="tel"
                        pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
                        placeholder="No. Telfon Pemesan" id="phone-8a32" name="number"
                        class="u-border-1 u-border-grey-30 u-grey-70 u-input u-input-rectangle u-radius-5"
                        required="">
                </div>
                <div class="u-form-group u-form-message">
                    <label for="message-3b9a" class="u-label">Keterangan</label>
                    <textarea placeholder="Tujuan Penggunaan Studio" rows="4" cols="50" id="message-3b9a"
                        name="desc"
                        class="u-border-1 u-border-grey-30 u-grey-70 u-input u-input-rectangle u-radius-5"
                        required="" autofocus="autofocus"></textarea>
                </div>

                <div>
                    <button type="submit" style="margin :0"
                    class="u-border-2 u-border-white u-btn u-btn-round u-button-style u-hover-palette-2-dark-3 u-none u-radius-8 u-text-hover-white u-text-white u-btn-2">ORDER</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
