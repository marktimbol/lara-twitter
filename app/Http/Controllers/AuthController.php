<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

//Requests
use App\Http\Requests\UserRegisterRequest;

//Commands
use App\Commands\UserRegisterCommand;

use Illuminate\Support\Facades\Mail;

class AuthController extends Controller {

	public function postRegister( UserRegisterRequest $request ) {

		$this->dispatchFrom( UserRegisterCommand::class, $request );

	}

	public function getLogin() {

		return 'login';

	}

	public function postLogin() {

		Mail::send('emails.welcome', array('name' => 'Mark Timbol'), function($message)
		{
		    $message->to('mark.timbol@hotmail.com', 'Mark Timbol')->subject('Welcome to Twitter!');
		});

		return 'sent';

	}
}


