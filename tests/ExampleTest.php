<?php

it('can test', function () {
    $product = \Mbsoft31\LaravelModelOptions\Tests\Models\Product::factory()->create();
    $optionData = [
        'name' => 'color',
        'value' => [
            'available_colors' => ['red', 'green', 'blue'],
            'default' => 'red',
            'selected' => 'red',
        ],
    ];
    $option = $product->addOption($optionData['name'], $optionData['value']);
    dd($option->toArray());
    expect(true)->toBeTrue();
});
