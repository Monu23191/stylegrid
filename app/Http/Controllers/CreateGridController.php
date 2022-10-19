<?php
// namespace App\Http\Controllers\Api;
namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Http\Request;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Validator,Redirect;
use Config;
use Storage;

class CreateGridController extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	
	public function loadgridview()
	{
		
		return view('stylist.postloginview.create_grid');
	}
}
