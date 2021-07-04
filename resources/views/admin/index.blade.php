@extends('master')

@section('title')
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('CSS/Notifikasi.css') }}" media="screen" />
@endsection

@section('content')
<section class="u-align-center u-clearfix u-grey-70 u-section-1" id="sec-2c25">
    <div class="u-clearfix u-sheet u-sheet-1">
        <table class="table table-dark mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Kontak</th>
                    <th scope="col" width='200px'>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reservations as $reservasi)
                <tr>
                    <th scope="row">{{ $reservasi->id }}</th>
                    <td>{{ $reservasi->pemesan }}</td>
                    <td>{{ $reservasi->date }}</td>
                    <td>{{ $reservasi->number }}</td>
                    <td class="d-flex" style="gap: 4px" >
                        <a href="{{ route('admin.detail', $reservasi->id) }}"
                            class="btn btn-info btn-sm text-white">Detail</a>
                        @if (!$reservasi->checked)
                        <form action="{{ route('admin.acc', $reservasi->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" onclick="return confirm('Yakin untuk menerima?')"
                                class="btn btn-success btn-sm text-white">Terima</button>
                        </form>
                        <form action="{{ route('admin.tolak', $reservasi->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" onclick="return confirm('Yakin untuk menolak?')"
                                class="btn btn-danger btn-sm text-white">Tolak</button>
                        </form>
                        @elseif ($reservasi->status == 'Telah dikonfirmasi')
                        <form action="{{ route('admin.acc', $reservasi->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button disabled type="submit" onclick="return confirm('Yakin untuk menerima?')"
                                class="btn btn-success btn-sm text-white">Diterima</button>
                        </form>
                        @elseif ($reservasi->status == 'Reservasi ditolak')
                        <form action="{{ route('admin.tolak', $reservasi->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button disabled type="submit" onclick="return confirm('Yakin untuk menolak?')"
                                class="btn btn-danger btn-sm text-white">Ditolak</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <a href="{{ route('logout') }}" style="margin: 1rem auto"
            class="u-border-2 u-border-grey-90 u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-5-light-1 u-radius-50 u-btn-1">Logout</a>
    </div>
</section>
@endsection
