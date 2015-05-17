<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
use App\Status;

class UsersController extends Controller {

	protected $currentUser;

	public function __construct() {

		$this->currentUser = Auth::user();
		view()->share('currentUser', Auth::user());
	}

	public function profile() {

		$statuses = Status::with('user')->get();

		return view('pages.users.profile', compact('statuses'));
	}

}
