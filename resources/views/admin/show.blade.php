@extends('master')

@section('title')
<title>Detail</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('CSS/Notifikasi.css') }}" media="screen" />
@endsection

@section('content')
<section class="u-align-center u-clearfix u-grey-70 u-section-1" id="sec-2c25">
    <div class="u-clearfix u-sheet u-sheet-1">
        <table class="table table-dark mt-4">
            <tbody>
                <tr>
                  <th scope="row">ID Pesanan</th>
                  <td>{{ $reservasi->id }}</td>
                </tr>
                <tr>
                  <th scope="row">ID Pemesan</th>
                  <td>{{ $reservasi->user->id }}</td>
                </tr>
                <tr>
                  <th scope="row">Nama Pemesan</th>
                  <td>{{ $reservasi->pemesan }}</td>
                </tr>
                <tr>
                  <th scope="row">Waktu Booking</th>
                  <td>{{ $reservasi->date }}</td>
                </tr>
                <tr>
                  <th scope="row">Nomor Pemesan</th>
                  <td>{{ $reservasi->number }}</td>
                </tr>
                <tr>
                  <th scope="row">Detail Pesanan</th>
                  <td>{{ $reservasi->desc }}</td>
                </tr>
                <tr>
                  <th scope="row">Status Pesanan</th>
                  <td>{{ $reservasi->status }}</td>
                </tr>
            </tbody>
          </table>

        <a href="{{ route('logout') }}" style="margin: 1rem auto"
            class="u-border-2 u-border-grey-90 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-5-light-1 u-radius-50 u-btn-1">Logout</a>
    </div>
</section>
@endsection
