<?php
namespace App\Repositories\User;

use Illuminate\Support\Facades\Mail;
use App\User;

class UserRepository implements UserRepositoryInterface {

	protected $user;

	public function getUser( $id ) {

		return User::findOrFail( $id );

	}
	public function store( $data ) {
		return User::create( $data );
	}

	public function sendWelcomeEmail( $userId ) {
		
		$this->user = $this->getUser( $userId );

		$emailData = [
			'name' => $this->user->fullName
		];


		Mail::send('emails.welcome', $emailData, function($message)
		{
		    $message->to( $this->user->email, $this->user->fullName)->subject('Welcome to Twitter!');
		});


	}

}