<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
use App\Models\User;
use App\Models\Vote;
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
        User::factory()->create(
            [
                'name' => 'Hanna',
                'email' => 'hanna.davis.mail@gmail.com'
            ]
        );
        User::factory(19)->create();
        $this->call(
            [
                CategorySeeder::class,
                StatusSeeder::class,
            ]
        );
        Idea::factory(100)->create();

        foreach (range(1, 20) as $userId) {
            foreach (range(1, 100) as $ideaId) {
                if ($ideaId % 2 === 0) {
                    Vote::factory()->create(
                        [
                            'idea_id' => $ideaId,
                            'user_id' => $userId
                        ]
                    );
                }
            }
        }
    }
}
