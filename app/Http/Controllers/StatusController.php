<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\StatusRequestController;

use App\User;
use App\Status;
use Auth;

class StatusController extends Controller {

	protected $user;

	protected $status;

	public function __construct() {


	}


	public function store( StatusRequestController $request ) {

		Status::create([
			'user_id' => Auth::user()->id,
			'status' => $request->status,
			]);

		return 'done';

	}

}
