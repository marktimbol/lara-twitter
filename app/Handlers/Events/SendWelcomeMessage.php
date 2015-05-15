<?php namespace App\Handlers\Events;

use App\Events\UserWasRegistered;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

use App\Repositories\User\UserRepositoryInterface;

class SendWelcomeMessage implements ShouldBeQueued {

	use InteractsWithQueue;


	public $user;

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct( UserRepositoryInterface $user )
	{
		$this->user = $user;
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserWasRegistered  $event
	 * @return void
	 */
	public function handle(UserWasRegistered $event)
	{

		$this->user->sendWelcomeEmail( $event->userId );

	}

}
