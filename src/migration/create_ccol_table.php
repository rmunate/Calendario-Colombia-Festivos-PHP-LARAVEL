<?php

use App\Clases\CCOL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /*-----------------------------------*/
    public function up(){
        CCOL::SchemaCreate();
    }

    /*-----------------------------------*/
    public function down(){
        CCOL::DropIfExists();
    }
};
