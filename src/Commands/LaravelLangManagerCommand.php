<?php

namespace Kapitalonline\LaravelLangManager\Commands;

use Illuminate\Console\Command;

class LaravelLangManagerCommand extends Command
{
    public $signature = 'laravel-lang-manager';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
