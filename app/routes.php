<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$services = Service::all()->sortBy(function($service) { return $service->metric; });
	return View::make('status')->with( array( 'services' => $services ) );
});

Route::controller('service', 'ServiceController');
Route::controller('issue', 'IssueController');
Route::controller('report', 'ReportController');