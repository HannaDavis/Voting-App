<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use App\Models\User;
use Database\Seeders\CategorySeeder;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\StatusSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        app(DatabaseSeeder::class)->call(CategorySeeder::class);
        app(DatabaseSeeder::class)->call(StatusSeeder::class);
    }

//    /** @test */
//    public function list_of_ideas_shows_on_main_page()
//    {
//        $categoryOne = Category::find(1);
//        $categoryTwo = Category::find(2);
//        $userId = User::factory()->create();
//
//        $ideaOne = Idea::factory()->create(
//            [
//                'user_id' => $userId,
//                'title' => 'My first idea',
//                'category_id' => $categoryOne->id,
//                'status_id' => 1,
//                'description' => 'description of my first title'
//            ]
//        );
//
//        $ideaTwo = Idea::factory()->create(
//            [
//                'user_id' => $userId,
//                'title' => 'My second idea',
//                'category_id' => $categoryTwo->id,
//                'status_id' => 1,
//                'description' => 'description of my second title'
//            ]
//        );
//
//        $response = $this->get(route('idea.index'));
//        $response->assertSuccessful();
//        $response->assertSee($ideaOne->title);
//        $response->assertSee($ideaOne->description);
//        $response->assertSee($categoryOne->name);
//        $response->assertSee(
//            '<div class=" bg-gray-200  sm:text-xs font-bold uppercase
//                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open
//                                </div>',
//            false
//        );
//
//        $response->assertSee($ideaTwo->title);
//        $response->assertSee($ideaTwo->description);
//        $response->assertSee($categoryTwo->name);
//    }

    /** @test */
    public function single_idea_shows_correctly_on_shows_page()
    {
        $userId = User::factory()->create();
        $categoryOne = Category::find(1);
        $idea = Idea::factory()->create(
            [
                'user_id' => $userId,
                'title' => 'my first idea',
                'category_id' => $categoryOne->id,
                'status_id' => 1,
                'description' => 'description of my first title'
            ]
        );
        $response = $this->get(route('idea.show', $idea));
        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
        $response->assertSee($categoryOne->name);
    }

    /** @test */
    public function pagination_works()
    {
        $userId = User::factory()->create();
        Idea::factory(11)->create(['user_id' => $userId]);
        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My First Idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My Eleventh Idea';
        $ideaEleven->save();


        $response = $this->get('/');
        $response->assertSee($ideaEleven->title);
        $response->assertDontSee($ideaOne->title);


        $response = $this->get('/?page=2');
        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);
    }
}
