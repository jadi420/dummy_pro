<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Customer::unguard(); // Disable mass assignment
        // $this->call(UserSeeder::class);
        $this->call(CustomerSeeder::class);
    }
}
