<?php namespace App\Handlers\Commands;

use App\Commands\UserRegisterCommand;

use App\Events\UserWasRegistered;

use Illuminate\Queue\InteractsWithQueue;

use App\Repositories\User\UserRepositoryInterface;

class UserRegisterCommandHandler {

	protected $user;

	/**
	 * Create the command handler.
	 *
	 * @return void
	 */
	public function __construct( UserRepositoryInterface $user )
	{
		$this->user = $user;
	}

	/**
	 * Handle the command.
	 *
	 * @param  UserRegisterCommand  $command
	 * @return void
	 */
	public function handle(UserRegisterCommand $command)
	{
		$data = [
			'fullName' => $command->fullName,
			'email'	=> $command->email,
			'password'	=> $command->password
		];

		$user = $this->user->store( $data );

		event(new UserWasRegistered( $user->id ));
	}

}
