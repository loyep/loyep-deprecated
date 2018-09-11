<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourceMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_metas', function (Blueprint $table) {
            $table->unsignedInteger('meta_id');
            $table->morphs('resource');
            $table->foreign('meta_id')->references('id')->on('metas')->onDelete('cascade');
            $table->primary(['meta_id', 'resource_id', 'resource_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resource_metas');
    }
}
