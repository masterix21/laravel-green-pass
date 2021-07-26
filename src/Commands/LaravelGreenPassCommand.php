<?php

namespace Masterix21\LaravelGreenPass\Commands;

use Illuminate\Console\Command;

class LaravelGreenPassCommand extends Command
{
    public $signature = 'laravel-green-pass';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
