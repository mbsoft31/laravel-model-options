<?php

namespace Mbsoft31\LaravelModelOptions\Commands;

use Illuminate\Console\Command;

class LaravelModelOptionsCommand extends Command
{
    public $signature = 'laravel-model-options';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
