<?php

use App\Models\SingaporeSavingsBond;
use Illuminate\Testing\Fluent\AssertableJson;

test('can list ssb paginated json', function () {
    SingaporeSavingsBond::factory()->create();

    $response = $this->getJson('/api/singapore-savings-bond');
    $response->assertStatus(200)
        ->assertJson(fn (AssertableJson $json) => $json->has('data', 1)
            ->etc()
        );
});
