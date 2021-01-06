<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2020_12_06_202725_create_servicios_table.php
            $table->string('titulo');
            $table->text('descripcion');
            $table->double('precio', 8, 2);
            $table->string('foto');
=======

            $table->bigInteger('profile_id')->unsigned();

            $table->string('title');
            $table->text('description');
            $table->double('price', 8, 2);
            $table->string('picture_path');

            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
>>>>>>> 1524bdc37a244914a83e5482a25d631ae1a8a48d:database/migrations/2020_08_24_193054_create_services_table.php

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
        Schema::dropIfExists('services');
    }
}
