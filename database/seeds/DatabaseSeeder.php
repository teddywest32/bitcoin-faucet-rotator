<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('FaucetsTableSeeder');
        $this->call('PaymentProcessorsTableSeeder');
        $this->call('FaucetPaymentProcessorsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('ReferralInfoTableSeeder');
		$this->call('MainMetaTableSeeder');
		$this->call('TwitterConfigTableSeeder');
	}

}
