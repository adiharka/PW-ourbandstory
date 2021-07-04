<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Validator;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::get();
        return view('admin.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservasi = Reservation::find($id);
        return view('admin.show', compact('reservasi', 'id'));
    }

    public function detail($id)
    {
        $reservasi = Reservation::find($id);
        return view('admin.show', compact('reservasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    public function acc($id)
    {
        $reservasi = Reservation::find($id);
        $reservasi->checked = 1;
        $reservasi->status = 'Telah dikonfirmasi';
        $reservasi->save();

        return redirect()->route('admin.index');
    }

    public function tolak($id)
    {
        $reservasi = Reservation::find($id);
        $reservasi->checked = 1;
        $reservasi->status = 'Reservasi ditolak';
        $reservasi->save();

        return redirect()->route('admin.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
