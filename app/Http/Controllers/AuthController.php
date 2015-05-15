<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

//Requests
use App\Http\Requests\UserRegisterRequest;

//Commands
use App\Commands\UserRegisterCommand;



class AuthController extends Controller {

	public function postRegister( UserRegisterRequest $request ) {

		$this->dispatchFrom( UserRegisterCommand::class, $request );

		return 'Done.';

	}

	public function getLogin() {

		return 'login';

	}

	public function postLogin() {



	}
}


