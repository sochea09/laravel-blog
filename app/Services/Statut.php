<?php namespace App\Services;

class Statut  {

	/**
	 * Set the login user statut
	 * 
	 * @param  App\Models\User $user
	 * @return void
	 */
	public function setLoginStatut($user)
	{
		session()->put('statut', $user->role->slug);
	}

	/**
	 * Set the visitor user statut
	 * 
	 * @return void
	 */
	public function setVisitorStatut()
	{
		session()->put('statut', 'visitor');
	}

	/**
	 * Set the statut
	 * 
	 * @return void
	 */
	public function setStatut()
	{
		if(!session()->has('statut')) 
		{
			session()->put('statut', auth()->check() ?  auth()->user()->role->slug : 'visitor');
		}
	}

}