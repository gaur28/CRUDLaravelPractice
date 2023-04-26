<?php

namespace Database\Seeders;

use App\Models\Coustmer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoustmerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coustmer::factory()
        ->count(10)
        ->hasInvoices(5)
        ->create();

        Coustmer::factory()
        ->count(10)
        ->hasInvoices(5)
        ->create();

        Coustmer::factory()
        ->count(10)
        ->hasInvoices(5)
        ->create();

        Coustmer::factory()
        ->count(5)
        ->create();
    }
}
