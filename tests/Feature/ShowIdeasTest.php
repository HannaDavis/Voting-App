<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_deas_shows_on_main_page()
    {
        $ideaOne = Idea::factory()->create(
            [
                'title' => 'my first idea',
                'description' => 'description of my first title'
            ]
        );

        $ideaTwo = Idea::factory()->create(
            [
                'title' => 'my second idea',
                'description' => 'description of my second title'
            ]
        );
        $response = $this->get(route('idea.index'));
        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
    }

    /** @test */
    public function single_idea_shows_correctly_on_shows_page()
    {
        $idea = Idea::factory()->create(
            [
                'title' => 'my first idea',
                'description' => 'description of my first title'
            ]
        );
        $response = $this->get(route('idea.show', $idea));
        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }

    /** @test */
    public function pagination_works()
    {
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create();
        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My First Idea';
        $ideaOne->save();

        Idea::factory(Idea::PAGINATION_COUNT + 1)->create();
        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My Eleventh Idea';
        $ideaEleven->save();

        $response = $this->get('/');
        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);

        $response = $this->get('/?page=2');
        $response->assertDontSee($ideaOne->title);
        $response->assertSee($ideaEleven->title);
    }
}
