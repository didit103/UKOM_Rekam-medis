<?php
 
class UserController extends \BaseController {
 
    public function login()
    {
                    return View::make('home.index');
    }
	
	public function authenticate() {
	if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
		   echo "login berhasil";
		   return Redirect::to('home')->with('pesan_error', 'Login gagal, username atau password salah!');
		}
		else{
		 return Redirect::to('beranda');
		}
	}

	
 
    public function doLogin()
    {
        $rules = array(
                        'email'    => 'required|email',
                        'password' => 'required|alphaNum|min:5'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
                        return Redirect::to('login')
                                        ->withErrors($validator)
                                        ->withInput(Input::except('password'));
        } else {
                        $logins = array(
                                        'email'     => Input::get('email'),
                                        'password'  => Input::get('password')
                        );
                        if (Auth::attempt($logins)) {
                                        return Redirect::to('/');
                        } else {               
                                        return Redirect::to('login');
                        }
        }
    }
 
    public function logout()
    {
        Auth::logout();
        return Redirect::to('home');
    }
 
}
