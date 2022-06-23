<?php

namespace App\Console\Commands;

use App\Models\Contract;
use Illuminate\Console\Command;

class FinishContract extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contract-finished';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $contracts = Contract::get();
        foreach ($contracts as $contract) {
            if ($contract->containerRentals->end_at == today()->toDateString()) {
                $contract->containerRentals->update(['status' => 'complete', 'remaining_discharges' => 0]);
                $contract->update(['status' => 'off']);
            }
        }
    }
}
