<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create202002ImageAreaMarksMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v2020-02_image_area_marks', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->string('email');
            $table->integer('rect_x0');
            $table->integer('rect_y0');
            $table->integer('rect_x1');
            $table->integer('rect_y1');
            $table->integer('label');
            $table->text('description')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v2020-02_image_area_marks');
    }
}
