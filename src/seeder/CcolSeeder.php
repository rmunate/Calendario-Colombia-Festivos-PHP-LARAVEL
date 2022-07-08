<?php

namespace Database\Seeders;

use App\Clases\CCOL;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalendarioSeeder extends Seeder
{
    public function run(){
        CCOL::seeder();
    }
}
