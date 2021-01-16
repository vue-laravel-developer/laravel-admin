<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Order::factory()
            ->count(50)
            ->has(
                \App\Models\OrderItem::factory()
                        ->count(3)
            )
            ->create();
    }
}
