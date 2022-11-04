<?php

namespace Mbsoft31\LaravelModelOptions\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mbsoft31\LaravelModelOptions\Tests\Database\Factories\ProductFactory;
use Mbsoft31\LaravelModelOptions\Traits\HasOptions;

/**
 * @method static create(array $inputs)
 */
class Product extends Model
{
    use HasFactory;
    use HasOptions;

    protected $guarded = [];

    protected static function newFactory()
    {
        return ProductFactory::new();
    }

}
