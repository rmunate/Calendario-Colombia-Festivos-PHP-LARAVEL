<?php

use App\Clases\CalendarioColombia;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{

    public function up(){
        CalendarioColombia::SchemaCreate();
    }


    public function down(){
        CalendarioColombia::DropIfExists();
    }
};
