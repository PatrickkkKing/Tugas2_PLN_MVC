<?php

namespace App\Controllers;

use App\Core\Controller;

class Dashboard extends Controller
{

	public function index()
	{
		$this->dashboard('dashboard/index');
	}
}