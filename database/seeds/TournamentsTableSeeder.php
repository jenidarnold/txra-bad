<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Tournament;
class TournamentsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('tournaments')->delete();
		
		Tournament::create([
			'tournament_id' => 	'21674',
			'name' 			=>	'Crazy Craigs Celebration Tournament',	
			'start_date' 	=> 	'2015-10-01',
			'end_date' 		=> 	'2016-02-18',
			'url' 			=> 	'http://www.r2sports.com/tourney/home.asp?TID=21674',
			'logo' 			=> 	'21674_large.jpg',
		]);

		Tournament::create([
			'tournament_id' => 	'21596',
			'name' 			=>	'2017 June Triple Crown Racquetball Shootout',	
			'start_date' 	=> 	'2015-10-01',
			'end_date' 		=> 	'2016-02-18',
			'url' 			=> 	'http://www.r2sports.com/tourney/home.asp?TID=21596',
			'logo' 			=> 	'triplecrown.jpg',
		]);
	}

}