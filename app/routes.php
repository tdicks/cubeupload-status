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
	$servers = Server::all()->sortBy(function($server) { return $server->metric; });
	return View::make('status')->with( array( 'servers' => $servers ) );
});

Route::controller('service', 'ServiceController');
Route::controller('server', 'ServerController');
Route::controller('issue', 'IssueController');
Route::controller('report', 'ReportController');