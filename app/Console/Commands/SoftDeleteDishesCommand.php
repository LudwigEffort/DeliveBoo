<?php

namespace App\Console\Commands;

use App\Dish;
use Illuminate\Console\Command;

class SoftDeleteDishesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dishes:softDelete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Aggiorna il database per utilizzare il soft delete dei piatti';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $deletedDishes = Dish::onlyTrashed()->get();

        foreach ($deletedDishes as $deletedDish) {
           $deletedDish->forceDelete();
        }

        $this->info('Database aggiornato con successo per utilizzare il soft delete dei piatti.');
    }
}
