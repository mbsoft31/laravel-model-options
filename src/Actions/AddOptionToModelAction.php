<?php

namespace Mbsoft31\LaravelModelOptions\Actions;

use Illuminate\Database\Eloquent\Model;
use Mbsoft31\LaravelModelOptions\Tests\Models\Product;

class AddOptionToModelAction
{
    public function addOption(Model $model, string $name, mixed $value): Model
    {
        /** @var Product $model * */
        return $model->options()->create([
            'name' => $name,
            'value' => $value,
        ]);
    }
}
