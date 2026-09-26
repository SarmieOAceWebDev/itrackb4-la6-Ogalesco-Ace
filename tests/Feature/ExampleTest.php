<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_subject_index_shows_all_subjects_without_filters(): void
    {
        $response = $this->get('/subjects');

        $response->assertOk()
            ->assertSee('CAP102')
            ->assertSee('ITPI333')
            ->assertSee('ITEL301');
    }

    public function test_subject_index_filters_by_code(): void
    {
        $response = $this->get('/subjects?code=ITPI333');

        $response->assertOk()
            ->assertSee('ITPI333')
            ->assertDontSee('ITPI441');
    }

    public function test_subject_index_filters_by_category(): void
    {
        $response = $this->get('/subjects?category=Project');

        $response->assertOk()
            ->assertSee('CAP102')
            ->assertDontSee('ITPI333');
    }

    public function test_subject_index_combines_code_and_category_filters(): void
    {
        $response = $this->get('/subjects?code=ITPI333&category=Major');

        $response->assertOk()
            ->assertSee('ITPI333')
            ->assertDontSee('ITPI441')
            ->assertDontSee('CAP102');
    }
}
