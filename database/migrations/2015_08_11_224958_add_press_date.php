<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPressDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('press', function (Blueprint $table) {
            //
            $table->string('press_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('press', function (Blueprint $table) {
            //
            $table->dropColumn(['press_date']);
        });
    }
}
