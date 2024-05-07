<?php

use App\Models\SingaporeSavingsBond;

test('can load csv', function () {
    $this->artisan('app:load-singapore-savings-bonds', ['filepath' => storage_path('tests/bonds-test.csv')]);
    expect(SingaporeSavingsBond::count())->tobe(12);
});

test('can load same issue code and will not create new ones', function () {
    $this->artisan('app:load-singapore-savings-bonds', ['filepath' => storage_path('tests/bonds-test.csv')]);
    $this->artisan('app:load-singapore-savings-bonds', ['filepath' => storage_path('tests/bonds-test.csv')]);
    expect(SingaporeSavingsBond::count())->tobe(12);
});
