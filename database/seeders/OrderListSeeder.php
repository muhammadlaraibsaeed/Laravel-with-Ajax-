<?php

namespace Database\Seeders;

use App\Models\OrderList;
use Illuminate\Database\Seeder;

class OrderListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersCount = max((int)$this->command->ask('How many OrderLists would you like?', 20), 1);
        OrderList::factory()->count($usersCount)->create();
    }
}
