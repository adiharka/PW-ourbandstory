@extends('master')

@section('title')
<title>Dashboard</title>
<link rel="stylesheet" href="{{ asset('CSS/Notifikasi.css') }}" media="screen" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('CSS/Notifikasi.css') }}" media="screen" />
@endsection

@section('content')
<section class="u-align-center u-clearfix u-grey-70 u-section-1" id="sec-2c25">
    <div class="u-clearfix u-sheet u-sheet-1">
        @if(session('success'))
            <img src="{{ asset('images/f4877ee052e4d92d33acf31f134211aacad9b7a830739f81f70d6c683664d06cee8e3b82a877675c6f8cd161f1bfb3968c5da80d2c17a9b84e0381_1280.png') }}"
                alt="" class="u-image u-image-circle u-image-1" data-image-width="1279" data-image-height="1280">
                <h2 class="u-text u-text-1">Your order has been successful<br>
                </h2>
                <h4 class="u-text u-text-2">"your order has been successfully placed, please return to the main page or you
                    can exit the website directly"</h4>
                    <a href="{{ route('user.reservasi.create') }}"
                    class="u-border-2 u-border-grey-90 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-5-light-1 u-radius-50 u-btn-1">Pesan
                    Lagi</a>
                    @else
                    <img src="{{ asset('images/e408af2f87fd39bbc27c2b1635ac8e63c40fac6f8b4850108464a6abdb40a636c87dcc0c22029f02a69602b7b628ee037d732ad225d155aad2df92_1280.jpg') }}"
                        alt="" class="u-image u-image-default u-image-1">
                <h4 class="u-text u-text-2">Selamat Datang</h4>
                <a href="{{ route('user.reservasi.create') }}" style="margin: 1rem auto"
                    class="u-border-2 u-border-grey-90 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-5-light-1 u-radius-50 u-btn-1">Pesan</a>
        @endif

        <table class="table table-dark table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col" width='120px'>ID Pesanan</th>
                <th scope="col">Pemesan</th>
                <th scope="col">Tgl</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($reservations as $pesanan)
                <tr>
                  <th scope="row">{{ $pesanan->id }}</th>
                  <td>{{ $pesanan->pemesan }}</td>
                  <td>{{ $pesanan->created_at }}</td>
                  @if ($pesanan->checked)
                  <td>{{ $pesanan->status }}</td>
                  @else
                  <td>
                    <div class="d-flex justify-content-between">
                        {{ $pesanan->status }}
                        <div class="d-flex flex-row" style="gap:4px">
                            <a href="{{ route('user.reservasi.edit', $pesanan->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('user.reservasi.destroy', $pesanan->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin untuk menghapus?')">Hapus</button>
                        </form>
                        </div>
                    </div>
                    </td>
                  @endif
                </tr>

                @empty
                <tr>
                    <td colspan="4">Anda belum memesan</td>
                </tr>
                @endforelse
            </tbody>
          </table>
        <a href="{{ route('logout') }}" style="margin: 1rem auto"
            class="u-border-2 u-border-grey-90 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-5-light-1 u-radius-50 u-btn-1">Logout</a>
    </div>
</section>
@endsection
