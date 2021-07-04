<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Auth;
use Validator;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::where('user_id', Auth::id())->get();
        return view('user.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.reservasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'pemesan'              => 'required',
            'date'                 => 'required',
            'number'               => 'required',
            'desc'                 => 'required',
        ];

        $validator1 = Validator::make($request->all(), $rules);

        if ($validator1->fails()) {
            return redirect()->back()->withErrors($validator1)->withInput($request->all);
        }

        // Save the data
        $reservasi = new Reservation();
        $reservasi->user_id = Auth::id();
        $reservasi->pemesan = $request->pemesan;
        $reservasi->date = $request->date;
        $reservasi->number = $request->number;
        $reservasi->desc = $request->desc;
        $reservasi->status = 'Menunggu dikonfirmasi';
        $simpan = $reservasi->save();

        $request->session()->put('reserved', 1);

        if ($simpan) {
            Session::flash('success', 'Berhasil memesan, harap tunggu kontak dari admin');
            return redirect()->route('user.reservasi.index');
        } else {
            Session::flash('errors', ['' => 'Gagal memesan, cobalah beberapa saat lagi']);
            return redirect()->route('user.reservasi.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservasi = Reservation::where('id', $id)->first();
        $tgl = Carbon::parse($reservasi->date)->format('Y-m-d\TH:i');
        return view('user.edit', compact('reservasi', 'tgl', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'pemesan'              => 'required',
            'date'                 => 'required',
            'number'               => 'required',
            'desc'                 => 'required',
        ];

        $validator1 = Validator::make($request->all(), $rules);

        if ($validator1->fails()) {
            return redirect()->back()->withErrors($validator1)->withInput($request->all);
        }

        // Save the data
        $reservasi = Reservation::find($id);
        $reservasi->pemesan = $request->pemesan;
        $reservasi->date = $request->date;
        $reservasi->number = $request->number;
        $reservasi->desc = $request->desc;
        $simpan = $reservasi->save();

        $request->session()->put('reserved', 1);

        if ($simpan) {
            Session::flash('success', 'Berhasil mengedit');
            return redirect()->route('user.reservasi.index');
        } else {
            Session::flash('errors', ['' => 'Gagal mengedit, cobalah beberapa saat lagi']);
            return redirect()->route('user.reservasi.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::destroy($id);
        return redirect()->route('user.reservasi.index');
    }
}
