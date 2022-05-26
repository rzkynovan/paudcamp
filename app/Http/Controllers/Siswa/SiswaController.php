<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Wali;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $data = $request->all();
        // $idwali = Wali::take(1)->orderBy('id', 'DESC')->pluck('id');

        Siswa::firstOrCreate([
            'email' => $data['email']
        ],
        [
            'id' => $data['id'],
            'name' => $data['nama'],
            'email' => $data['email'],
            'tgl_lahir' => $data['tgl_lahir'],
            'tempat_lahir' => $data['tempat_lahir'],
            'no_hp' => $data['no_hp'],
        ]);
        // return $data;
        return redirect(route('siswa.dashboard'));
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

    public function storewali (Request $request){

        $data = [
            'name' => $request->nama,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'siswa_id' => Auth::user()->id,

        ];

        // return $data;
        Wali::firstOrCreate([
            'siswa_id' => Auth::user()->id,
        ], $data

    );

        return redirect(route('siswa.dashboard'));
    }
}
