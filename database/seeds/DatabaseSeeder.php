<?php

use Illuminate\Database\Seeder;
use database\seeds\BreedsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('BreedsTableSeeder');
    }
}
