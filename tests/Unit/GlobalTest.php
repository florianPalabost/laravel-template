<?php

declare(strict_types=1);

test('global', function () {
    expect(true)->toBeTrue();
});

test('controllers should NOT use Request', function () {
    expect('App\Http\Controllers')->not()->toUse(Request::class);
});

test('debug functions should NOT be used', function () {
    $debugFunctions = ['dd', 'dump', 'ray', 'print_r', 'var_dump'];

    expect($debugFunctions)->not()->tobeUsed();
});
