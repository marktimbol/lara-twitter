<?php
namespace App\Repositories\User;

use Illuminate\Support\Facades\Mail;
use App\User;
use Event;

class UserRepository implements UserRepositoryInterface {

	public function store( $data ) {
		return User::create( $data );
	}

}