<?php

class KunjunganController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$kunjungans = Kunjungan::all();
			return View::make('kunjungan.index')->with('datakunjungan', $kunjungans);
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('kunjungan.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$kunjungans = new Kunjungan;
        
        $kunjungans->tgl_kunjungan                 = Input::get('tgl_kunjungan');
       $kunjungans->kd_pasien                    = Input::get('kd_pasien');
        $kunjungans->kd_poli             = Input::get('kd_poli');
        $kunjungans->jam_kunjungan                   = Input::get('jam_kunjungan');
      
        $kunjungans->save();
        
        return Redirect::to("kunjungan/create");
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		DB::table('kunjungans')->where('kd_pasien', '=', $id)->delete();
      Session::flash('message', 'Data Berhasil Dihapus');
      return Redirect::to('kunjungan/index');
	}


}
