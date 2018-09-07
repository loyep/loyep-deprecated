<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group')->nullable();
            $table->string('name')->nullable();
            $table->string('key')->comment('关键字');
            $table->text('value')->nullable()->comment('值');
            $table->string('type');
            $table->text('details')->nullable();
            $table->integer('order')->default(1);
            $table->timestamps();
            $table->unique(['name', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
