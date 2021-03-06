<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create202002ImageUploadsMigartion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v2020-02_image_uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename_pre_iva')->nullable()->default(null);
            $table->string('path_pre_iva')->nullable()->default(null);
            $table->string('filename_post_iva');
            $table->string('path_post_iva');
            $table->string('uploaded_by');
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
        Schema::dropIfExists('v2020-02_image_uploads');
    }
}
