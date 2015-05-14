<?php namespace App\Commands;

use App\Commands\Command;

class UserRegisterCommand extends Command {


	public $fullName;
	public $email;
	public $password;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct( $fullName, $email, $password )
	{
		$this->fullName = $fullName;
		$this->email = $email;
		$this->password = $password;
	}

}
