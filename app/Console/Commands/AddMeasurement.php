<?php

namespace App\Console\Commands;

use App\Models\Measurement;
use Illuminate\Console\Command;

class AddMeasurement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:measurement';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new measurement';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('Measurement Name');
        $base_unit = $this->ask('Base Units');

        Measurement::create([
            'name' => $name,
            'base_units_tablespoon' => $base_unit
        ]);

        $this->info('Measurement added!');
    }
}
