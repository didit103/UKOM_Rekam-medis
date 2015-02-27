<?php

class ObatController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$obats = Obat::all();
			return View::make('obat.index')->with('dataobat', $obats);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('obat.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$obats = new Obat;
        
        $obats->kd_obat                 = Input::get('kd_obat');
       $obats->nm_obat                    = Input::get('nm_obat');
        $obats->jml_obat             = Input::get('jml_obat');
        $obats->ukuran                   = Input::get('ukuran');
        $obats->harga                   = Input::get('harga');
      
        $obats->save();
        
        return Redirect::to("obat/create");
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
		DB::table('obats')->where('kd_obat', '=', $id)->delete();
      Session::flash('message', 'Data Berhasil Dihapus');
      return Redirect::to('obat/index');
	}


}
