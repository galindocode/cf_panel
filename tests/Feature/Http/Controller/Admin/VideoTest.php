<?php

namespace Tests\Feature\Http\Controller\Admin;

use App\Models\Categories;
use App\Models\User;
use App\Models\Videos;
use Carbon\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VideoController extends TestCase
{
    use RefreshDatabase;


    public function testIndex()
    {
        $this->get('videos')->assertStatus(200);
    }

    public function testStore()
    {
        $this->generateCatsAndUsers();
        $video = Videos::factory()->create([
            'categorie_id' => 0,
            'user_id' => 0
        ]);
        $this->post('admin/videos', $video->toArray())->assertStatus(200);
        $this->assertDatabaseHas('videos', [
            'id' => $video->id
        ]);
    }

    public function testStoreWithoutFactory()
    {
        $this->generateCatsAndUsers();
        $video = [
            'id' => 1,
            'categorie_id' => 0,
            'user_id' => 0,
            'title' => 'test',
        ];
        $this->post('admin/videos', $video)->assertStatus(200);
        $this->assertDatabaseHas('videos', [
            'id' => 1
        ]);
    }
    private function generateCatsAndUsers()
    {
        Categories::factory()->create([
            'id' => 0
        ]);

        User::factory()->create([
            'id' => 0
        ]);
    }
}
