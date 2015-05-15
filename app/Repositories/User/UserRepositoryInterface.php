<?php
namespace App\Repositories\User;

interface UserRepositoryInterface {

	public function getUser( $id );

	public function store( $data );

	public function sendWelcomeEmail( $userId );
}