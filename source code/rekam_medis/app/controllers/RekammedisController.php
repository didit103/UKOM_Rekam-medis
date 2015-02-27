<?php

class RekammedisController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$medis = Medis::all();
			return View::make('medis.index')->with('datamedis', $medis);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('medis.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$medis = new Medis;
        
        $medis->kd_tindakan                 = Input::get('kd_tindakan');
        $medis->kd_obat                    = Input::get('kd_obat');
        $medis->kd_user             = Input::get('kd_user');
        $medis->no_pasien                   = Input::get('no_pasien');
        $medis->diagnosa                = Input::get('diagnosa');
        $medis->keluhan           = Input::get('keluhan');
        $medis->tgl_pemeriksaan                  = Input::get('tgl_pemeriksaan');
        $medis->ket            = Input::get('ket');
      
        $medis->save();
        
        return Redirect::to("medis/create"); 
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
		DB::table('medis')->where('no_pasien', '=', $id)->delete();
      Session::flash('message', 'Data Berhasil Dihapus');
      return Redirect::to('medis/index');
	}


}
