<?php

class TindakanController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tindakans = Tindakan::all();
			return View::make('tindakan.index')->with('datatindakan', $tindakans);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tindakan.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$tindakans = new Tindakan;
        
        $tindakans->kd_tindakan                 = Input::get('kd_tindakan');
       $tindakans->nm_tindakan                    = Input::get('nm_tindakan');
        $tindakans->ket             = Input::get('ket');
        
        $tindakans->save();
        
        return Redirect::to("tindakan/create");
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
		DB::table('tindakans')->where('kd_tindakan', '=', $id)->delete();
      Session::flash('message', 'Data Berhasil Dihapus');
      return Redirect::to('tindakan/index');
	}


}
