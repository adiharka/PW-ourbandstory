@extends('master')

@section('title')
<title>Edit Reservasi</title>
<link rel="stylesheet" href="{{ asset('CSS/Reservasi.css') }}" media="screen" />
@endsection

@section('content')
<section class="u-align-center u-black u-clearfix u-section-2" id="carousel_6aec">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-left u-text u-text-1">Edit Reservasi</h2>
        <h6 class="u-align-left u-text u-text-2">Kami menyediakan studio musik premium untuk berbagai keperluan
            bermusik Anda. Segala keperluan yang Anda butuhkan dapat kami sediakan demi pengalaman bermusik yang
            sempurna.</h6>
        <div class="u-form u-form-1">
            <form action="{{ route('user.reservasi.update', $id) }}" method="POST"
                class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form"
                style="padding: 10px" source="custom" name="form" redirect="true">
                @csrf
                @method('PUT')
                @include('alert')
                <div class="u-form-group u-form-name">
                    <label for="name-3b9a" class="u-label">Nama Pemesan</label>
                    <input type="text" placeholder="Nama Lengkap" id="name-3b9a" name="pemesan"
                        class="u-border-1 u-border-grey-30 u-grey-70 u-input u-input-rectangle u-radius-5"
                        required="" value="{{ old('pemesan', $reservasi->pemesan) }}">
                </div>
                <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-2">
                    <label for="date-1345" class="u-label">Waktu Reservasi</label>
                    <input type="datetime-local" placeholder="MM/DD/YYYY" id="date-1345" name="date"
                        class="u-border-1 u-border-grey-30 u-grey-70 u-input u-input-rectangle u-radius-5"
                        required="" value="{{ old('date', $tgl) }}">
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-3">
                    <label for="phone-8a32" class="u-label">No. Telfon</label>
                    <input type="tel"
                        pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
                        placeholder="No. Telfon Pemesan" id="phone-8a32" name="number"
                        class="u-border-1 u-border-grey-30 u-grey-70 u-input u-input-rectangle u-radius-5"
                        required="" value="{{ old('number', $reservasi->number) }}">
                </div>
                <div class="u-form-group u-form-message">
                    <label for="message-3b9a" class="u-label">Keterangan</label>
                    <textarea placeholder="Tujuan Penggunaan Studio" rows="4" cols="50" id="message-3b9a"
                        name="desc"
                        class="u-border-1 u-border-grey-30 u-grey-70 u-input u-input-rectangle u-radius-5"
                        required="" autofocus="autofocus">{{ old('desc', $reservasi->desc) }}</textarea>
                </div>

                <div>
                    <button type="submit" style="margin :0"
                    class="u-border-2 u-border-white u-btn u-btn-round u-button-style u-hover-palette-2-dark-3 u-none u-radius-8 u-text-hover-white u-text-white u-btn-2">EDIT ORDER</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
