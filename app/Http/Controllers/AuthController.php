<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

//Requests
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\AuthLoginRequest;

//Commands
use App\Commands\UserRegisterCommand;

use Auth;

use Laracasts\Flash\Flash;



class AuthController extends Controller {

	public function postRegister( UserRegisterRequest $request ) {

		$this->dispatchFrom( UserRegisterCommand::class, $request );

		return redirect()->route('user.profile');

	}

	public function getLogin() {

		return 'login';

	}

	public function postLogin( AuthLoginRequest $request ) {

		$credentials = [
			'email'	 => $request->email,
			'password'	=> $request->password
		];

		if( Auth::attempt( $credentials ) ) {

			return redirect()->route('user.profile');

		} else {

			Flash::error('Incorrect Email/Password. Please try again.');
			return redirect()->back()->withInput();

		}

	}
}


