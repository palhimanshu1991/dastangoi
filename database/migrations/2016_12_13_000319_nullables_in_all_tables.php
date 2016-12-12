<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class NullablesInAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->text('bio')->nullable()->default(null)->change();
            $table->string('image')->nullable()->default(null)->change();
            $table->string('facebook')->nullable()->default(null)->change();
            $table->string('twitter')->nullable()->default(null)->change();
            $table->string('google')->nullable()->default(null)->change();
            $table->string('website')->nullable()->default(null)->change();
        });

        Schema::table('eventseven', function (Blueprint $table) {
            $table->text('event_description')->nullable()->default(null)->change();
            $table->string('event_name')->nullable()->default(null)->change();
            $table->string('event_place')->nullable()->default(null)->change();
            $table->string('event_date')->nullable()->default(null)->change();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->text('bio')->nullable()->default(null)->change();
            $table->string('image')->nullable()->default(null)->change();
            $table->string('facebook')->nullable()->default(null)->change();
            $table->string('twitter')->nullable()->default(null)->change();
            $table->string('google')->nullable()->default(null)->change();
            $table->string('website')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
