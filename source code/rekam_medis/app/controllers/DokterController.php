<?php

class DokterController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dokters = Dokter::all();
			return View::make('dokter.index')->with('datadokter', $dokters);
	}
	


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dokter.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$dokters = new Dokter;
        
        $dokters->kd_dokter                 = Input::get('kd_dokter');
        $dokters->kd_poli                    = Input::get('kd_poli');
        $dokters->tgl_kunjungan             = Input::get('tgl_kunjungan');
        $dokters->kd_user                   = Input::get('kd_user');
        $dokters->nm_dokter                = Input::get('nm_dokter');
        $dokters->sip           = Input::get('sip');
        $dokters->tempat_lahir                  = Input::get('tempat_lahir');
        $dokters->no_telp            = Input::get('no_telp');
        $dokters->alamat                 = Input::get('alamat');
      
        $dokters->save();
        
        return Redirect::to("dokter/create"); 	
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
		DB::table('dokters')->where('kd_dokter', '=', $id)->delete();
      Session::flash('message', 'Data Berhasil Dihapus');
      return Redirect::to('dokter/index');
	}


}
