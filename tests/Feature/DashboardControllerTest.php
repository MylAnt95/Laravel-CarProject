<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Post;
use App\Models\CarBrand;

class DashboardControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_dashboard_displays_user_and_posts(): void
    {
        $user = User::factory()->create();
        $posts = Post::factory()->count(3)->create();

        $response = $this->actingAs($user)->get(route('dashboard'));

        $response->assertStatus(200);
        $response->assertViewIs('dashboard');
        $response->assertViewHas('user', $user);
        $response->assertViewHas('posts', function ($viewPosts) use ($posts) {
            return count($viewPosts) === 3 && $viewPosts->first()->id === $posts->first()->id;
        });
    }

    public function test_store_post()
    {
        $user = User::factory()->create();
        $carBrand = CarBrand::factory()->create();

        $postData = [
            'title' => 'Test Post',
            'car_brand' => $carBrand->id,
            'body' => 'Test Body',
        ];

        $response = $this->actingAs($user)->post(route('dashboard.store-post'), $postData);

        $response->assertRedirect(route('dashboard'));

        $post = Post::where('title', $postData['title'])->first();
        $this->assertNotNull($post);
        $this->assertEquals($user->id, $post->user_id);
        $this->assertEquals($postData['body'], $post->body);
        $this->assertEquals($carBrand->id, $post->car_brand_id);
    }

    public function test_createPost_returns_correct_view_with_categories()
    {
        $user = User::factory()->create();
        $carBrands = CarBrand::factory()->count(3)->create();

        $response = $this->actingAs($user)->get(route('dashboard.create-post'));

        $response->assertStatus(200);
        $response->assertViewIs('dashboard_create_post');
        $response->assertViewHas('categories', function ($viewCarBrands) use ($carBrands) {
            return count($viewCarBrands) === 3 &&
                $viewCarBrands->first()->id === $carBrands->first()->id;
        });
    }
    public function test_showCategory_returns_correct_view_with_posts_and_category()
    {
        $user = User::factory()->create();
        $carBrand = CarBrand::factory()->create();
        $posts = Post::factory()->count(3)->create(['car_brand_id' => $carBrand->id]);

        $response = $this->actingAs($user)->get(route('categories_show', $carBrand));

        $response->assertStatus(200);
        $response->assertViewIs('categories_show');
        $response->assertViewHas('category', $carBrand);
        $response->assertViewHas('posts', function ($viewPosts) use ($posts) {
            return count($viewPosts) === 3 &&
                $viewPosts->first()->id === $posts->first()->id;
        });
    }
    public function test_index_returns_correct_view_with_posts()
    {
        $posts = Post::factory()->count(3)->create();

        $response = $this->get(route('index'));

        $response->assertStatus(200);
        $response->assertViewIs('index');
        $response->assertViewHas('posts', function ($viewPosts) use ($posts) {
            return count($viewPosts) === 3 &&
                $viewPosts->first()->id === $posts->first()->id;
        });
    }

    public function test_profile_returns_correct_view_with_user_and_posts()
    {
        $user = User::factory()->create();
        $posts = Post::factory()->count(3)->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->get(route('profile'));

        $response->assertStatus(200);
        $response->assertViewIs('profile');
        $response->assertViewHas('user', $user);
        $response->assertViewHas('posts', function ($viewPosts) use ($posts) {
            return $viewPosts->contains($posts[0]) &&
                $viewPosts->contains($posts[1]) &&
                $viewPosts->contains($posts[2]);
        });
    }

    public function test_deletePost_deletes_post_and_redirects_to_dashboard()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->delete(route('dashboard.delete-post', $post));

        $response->assertRedirect(route('dashboard'));
        $this->assertDatabaseMissing('posts', ['id' => $post->id]);
    }
}
