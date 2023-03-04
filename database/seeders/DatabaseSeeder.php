<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\OrderListSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if ($this->command->confirm('Do you want to refresh the database?',true)) {
            $this->command->call('migrate:refresh');
            $this->command->info('Database was refreshed');
        }
        
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            OrderListSeeder::class,
            ImageSeeder::class 
        ]);
    }
}
