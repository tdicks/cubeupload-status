<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
		DB::table('services')->delete();
		DB::table('issues')->delete();
		DB::table('issue_service')->delete();
		
		$cache1 = new Service();
		$cache1->name = 'Image Cache #1';
		$cache1->metric = 2;
		$cache1->save();
		
		$cache2 = new Service();
		$cache2->name = 'Image Cache #2';
		$cache2->metric = 3;
		$cache2->save();
		
		$web = new Service();
		$web->name = 'Web Server';
		$web->metric = 1;
		$web->save();
		
		$issue = new Issue();
		$issue->title = 'Unconfirmed problems accessing HTTP';
		$issue->save();
		
		$issue->services()->save($web);
		
		$ohfux = new Issue();
		$ohfux->title = 'Confirmed DNS problems with this service';
		$ohfux->confirmed = true;
		$ohfux->save();
		$ohfux->services()->save($cache1);
		
	}

}