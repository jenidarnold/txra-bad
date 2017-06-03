<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Subscriber;

class SubscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('subscribers')->delete();
		Subscriber::create([
			'id' => '1',
			'email' => 'TXRA Newsletter',
			'subscription_id' => 1,
			'enabled' => true,
		]);
		
    }
}
