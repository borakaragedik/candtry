<?php

namespace Candtry\Candtry\Console\Commands;

use Illuminate\Console\Command;

class CandtryCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'candtry:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package candtry.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('Candtry placeholder command executed.');

        return self::SUCCESS;
    }
}
