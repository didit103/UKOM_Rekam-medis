<?php

class ListpasienController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
				 $data = DB::table('pasien')->paginate(5);
        $data =
        [
            'pasien' => $data
        ];
        return View::make('listpasien.listpasien', $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$pasiens = new Pasien;
        
        $pasiens->no_pasien                 = Input::get('no_pasien');
        $pasiens->j_kel                    = Input::get('j_kel');
        $pasiens->agama             = Input::get('agama');
        $pasiens->alamat                   = Input::get('alamat');
        $pasiens->tgl_lhr                = Input::get('tgl_lhr');
        $pasiens->usia           = Input::get('usia');
        $pasiens->no_telp                  = Input::get('no_telp');
        $pasiens->nm_kk            = Input::get('nm_kk');
        $pasiens->hub_kel                 = Input::get('hub_kel');
        $pasiens->nm_pasien                    = Input::get('nm_pasien');
      
        $pasiens->save();
        
        return Redirect::to("pasien/create"); 
	
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
		//
	}


}
