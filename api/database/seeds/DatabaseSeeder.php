<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersCollectionSeeder::class);
        $this->call(CustomersCollectionSeeder::class);
        $this->call(FeaturesCollectionSeeder::class);
    }
}
