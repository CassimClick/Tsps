<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Color extends BaseController
{
	public function index()
	{

		$data['page'] =[
			'page'=>'colors',
			'title' =>'colors'
		];
		return view('colors',$data);
	}
}