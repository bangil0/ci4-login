<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if (! $this->isLoggedIn()) {
			return redirect()->to('/login');
		}
		$data = [
			'title' => 'Login dan Register System CodeIgniter 4'
		];
		return view('home', $data);
	}

	private function isLoggedIn() : bool
	{
		if (session()->get('logged_in')) {
			return true;
		}
		return false;
	}

}
