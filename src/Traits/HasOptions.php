<?php

namespace Mbsoft31\LaravelModelOptions\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Mbsoft31\LaravelModelOptions\Actions\AddOptionToModelAction;
use Mbsoft31\LaravelModelOptions\Models\Option;

trait HasOptions
{
    /**
     * Get all the options of the model.
     *
     * @return MorphMany
     */
    public function options(): MorphMany
    {
        return $this->morphMany(Option::class, 'optionable');
    }

    /**
     * Return true if option with the name $name exist,
     * false otherwise.
     *
     * @param  string  $name
     * @return bool
     */
    public function hasOption(string $name): bool
    {
        // TODO: method to implement
        return false;
    }

    /**
     * Add new option to model.
     * Returns the option instance.
     *
     * @param  string  $name
     * @param  mixed  $value
     * @return Model|Option|null
     */
    public function addOption(string $name, mixed $value): Model|Option|null
    {
        // TODO: method to implement
        $adder = new AddOptionToModelAction();

        return $adder->addOption($this, $name, $value);
    }

    /**
     * remove the option with the name $name from model's options.
     * Returns true if removed, false otherwise.
     *
     * @param $name
     * @return bool
     */
    public function removeOption($name): bool
    {
        // TODO: method to implement
        return false;
    }
}
