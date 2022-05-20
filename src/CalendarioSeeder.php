<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Clases\CalendarioColombia;
use Illuminate\Support\Facades\DB;

class CalendarioSeeder extends Seeder
{
    public function run(){
        CalendarioColombia::seeder();
    }
}
