<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
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
        $this->call([
            CategorySeeder::class,
            StatusSeeder::class,
        ]);
        Idea::factory(30)->create();
    }
}
