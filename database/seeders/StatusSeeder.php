<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple-500 text-white']);
        Status::factory()->create(['name' => 'In Progress', 'classes' => 'bg-yellow-500 text-white']);
        Status::factory()->create(['name' => 'Implemented', 'classes' => 'bg-green-500 text-white']);
        Status::factory()->create(['name' => 'Closed', 'classes' => 'bg-red-500 text-white']);
    }
}
