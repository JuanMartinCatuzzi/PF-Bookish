<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertValuesOnModalities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('modalities')->insert([
          'name'=>'REGULAR',
        ]);
        DB::table('modalities')->insert([
          'name'=>'INTENSIVO'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modalities', function (Blueprint $table) {
            //
        });
    }
}
