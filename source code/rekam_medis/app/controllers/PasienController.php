<?php

class PasienController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()

	{
			$pasiens = Pasien::all();
			return View::make('pasien.listpasien')->with('datapasien', $pasiens);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	     return View::make('pasien.create');  	
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array('no_pasien' => 'required', 'nm_pasien' => 'required', 'j_kel' => 'required', 'agama' => 'required', 'alamat' => 'required', 'tgl_lhr' => 'required', 'usia' => 'required', 'no_telp_' => 'required', 'nm_kk' => 'required', 'hub_kel' => 'required');

		$validation = Validator::make(Input::all(), $rules);
		if($validation->fails()){
			return Redirect::back()->withInput()->withErrors($validation->messages());
			}
			else{
	$pasiens = new Pasien;
        
        $pasiens->no_pasien                 = Input::get('no_pasien');
        $pasiens->nm_pasien                    = Input::get('nm_pasien');
        $pasiens->j_kel                    = Input::get('j_kel');
        $pasiens->agama             = Input::get('agama');
        $pasiens->alamat                   = Input::get('alamat');
        $pasiens->tgl_lhr                = Input::get('tgl_lhr');
        $pasiens->usia           = Input::get('usia');
        $pasiens->no_telp                  = Input::get('no_telp');
        $pasiens->nm_kk            = Input::get('nm_kk');
        $pasiens->hub_kel                 = Input::get('hub_kel');

      
        $pasiens->save();
        
        return Redirect::to("pasien/create");
        } 
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
		
  $pasiens = Pasien::find($id);
 
       $pasiens = DB::table('pasiens')->where('no_pasien',$id)->first();
      $pasiens =
      [
          'pasiensbyno_pasien' => $pasiens
    ];
  return View::make('pasien.edit', $pasiens);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	  $rules = array(
           'no_pasien' => 'required',
            'nm_pasien' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('pasien/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('pasiens')
      ->where('no_pasien', $id)
      ->update(array(
                   'no_pasien' => Input::get('no_pasien'),
                  'j_kel' => Input::get('j_kel'),
                  'agama' => Input::get('agama'),
                  'alamat' => Input::get('alamat'),
                   'tgl_lhr' => Input::get('tgl_lhr'),
                  'usia' => Input::get('usia'),
                  'no_telp' => Input::get('no_telp'),
                  'nm_kk' => Input::get('nm_kk'),
                  'hub_kel' => Input::get('hub_kel'),
                  'nm_pasien' => Input::get('nm_pasien')
            ));
 
      Session::flash('message', 'Data Paket Berhasil Diubah!!!');
      return Redirect::to('pasien/listpasien');
      }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)

	{
		DB::table('pasiens')->where('no_pasien', '=', $id)->delete();
      Session::flash('message', 'Data Berhasil Dihapus');
      return Redirect::to('pasien/listpasien');
	}
}
