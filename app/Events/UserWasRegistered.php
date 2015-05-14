<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserWasRegistered extends Event {

	use SerializesModels;

	public $userId;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct( $userId)
	{
		$this->userId = $userId;
	}

}
