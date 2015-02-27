<?php

class LaboratoriumController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$laboratoria = Laboratorium::all();
			return View::make('laboratorium.index')->with('datalab', $laboratoria);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('laboratorium.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$laboratoria = new Laboratorium;
        
        $laboratoria->kd_lab                 = Input::get('kd_lab');
        $laboratoria->nm_rm                    = Input::get('nm_rm');
        $laboratoria->hasil_lab             = Input::get('hasil_lab');
        $laboratoria->ket                   = Input::get('ket');

        $laboratoria->save();
        
        return Redirect::to("laboratorium/create");
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
		DB::table('laboratoria')->where('kd_lab', '=', $id)->delete();
      Session::flash('message', 'Data Berhasil Dihapus');
      return Redirect::to('laboratorium/index');
	}


}
