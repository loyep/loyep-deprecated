<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_metas', function (Blueprint $table) {
            $table->unsignedInteger('meta_id');
            $table->morphs('model');
            $table->foreign('meta_id')->references('id')->on('metas')->onDelete('cascade');
            $table->primary(['meta_id', 'model_id', 'model_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_metas');
    }
}
